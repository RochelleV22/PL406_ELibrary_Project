<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(
            [
                'level'       => 'creator',
                'username'    => 'admin',
            ],
            [
                'firstName'   => 'koki',
                'lastName'    => 'pillai',
                'email'       => 'koki@gmail.com',
                'tel'         => '9145769644',
                'address'     => 'goa',
                'password'    => bcrypt('123456'),
                'created_at'  => date("Y-m-d H:i:s")
            ]
        );

        factory(User::class, 10)->create();
    }
}
