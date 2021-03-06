<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('label')->nullable();
            $table->timestamps();
        });

        Schema::create('permission_role', function (Blueprint $table) {
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

            $table->integer('permission_id')->unsigned();
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');

            $table->primary(['role_id', 'permission_id']);
        });

        Schema::create('role_user', function (Blueprint $table) {
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->primary(['role_id', 'user_id']);
        });

        $permissions = [
            'articles-admin' => 'Post Management',
            'books-admin' => 'Book management',
            'users-admin' => 'User management',
            'lends-admin' => 'Loan Management ',
            'roles-admin' => 'Management of officials',
            'settings-admin' => 'Manage settings',
        ];

        $p = array();

        foreach ($permissions as $key => $value) {
            $inserted = DB::table('permissions')->insertGetId([
                'name' => $key,
                'label' => $value,
                'created_at' => Carbon\Carbon::now(),
            ]);

            $p[] = $inserted;
        }

        $manager = DB::table('roles')->insertGetId([
            'name' => 'General Manager',
            'created_at' => Carbon\Carbon::now(),
        ]);

        foreach ($p as $key => $value) {
            DB::table('permission_role')->insert([
                'role_id' => $manager,
                'permission_id' => $value,
            ]);
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission_role');
        Schema::dropIfExists('role_user');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('permissions');
    }
}
