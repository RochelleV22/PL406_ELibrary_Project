<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:users-admin');
    }

    public function index()
    {
        $users = User::where('level', '!=', 'new')->get();
        return view('admin.user.index', compact('users'));
    }

    public function newUsers()
    {
        $users = User::where('level', 'new')->get();

        return view('admin.user.new', compact('users'));
    }
    
    public function create()
    {
        return view('admin.user.create');
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.user.edit', compact('user', 'roles'));
    }

    public function update(User $user)
    {
        $this->validate(request(), [
            'file' => 'file|image|mimes:jpeg|max:500',
            'first-name' => 'required',
            'last-name' => 'required',
            'email' => 'nullable|Email|unique:users,email,' . $user->id,
            'national-code' => 'required|unique:users,username,' . $user->id,
            'tel' => 'required',
            'address' => 'required',

        ], [
            'file.required' => 'Please select the image file',
            'file.file' => 'Please select a file to send ',
            'file.image' => 'Please select a photo file ',
            'file.mimes' => 'Please send photo in jpeg format ',
            'file.max' => 'The size of the uploaded file should not exceed 500 KB ',

            'first-name.required' => 'Please enter your username ',
            'last-name.required' => 'Please enter the last name of the user',
            'email.email' => 'Please enter user email correctly ',
            'email.unique' => 'Email already exist ',
            'national-code.required' => 'Please enter the username',
            'national-code.unique' => 'Username entered already exists ',
            'tel.required' => 'Please enter the user phone number',
            'address.required' => 'Please enter the user address',

        ]);

        if (request('file')) {
            if ($user->image == 'default.jpg') {
                do {
                    $randomString = str_random(20) . '.jpg';
                    $user_image = User::where('image', $randomString)->get();

                } while (!$user_image->isEmpty());

                $user->update([
                    'image' => $randomString,
                ]);

                request('file')
                    ->move(public_path('user-img'), $randomString);

            } else {
                $randomString = $user->image;

                request('file')
                    ->move(public_path('user-img'), $randomString);
            }
        }

        if ($user->level != 'creator' && Gate::allows('roles-admin')) {
            $this->validate(request(), [
                'role_id' => 'exists:roles,id',
            ], [
                'role_id.exists' => 'Author ID not found in database',
            ]);

            if (request('role_id')) {
                $user->level = 'admin';
            } else {
                $user->level = 'user';
            }

            $user->roles()->sync(request()->input('role_id'));
        }

        $user->update([
            'firstName' => request('first-name'),
            'lastName' => request('last-name'),
            'tel' => request('tel'),
            'address' => request('address'),
        ]);

        session()->flash('message', 'User information updated successfully.');

        return redirect(route('users.index'));

    }

    public function destroy(User $user)
    {
        if ($user->level == 'creator') {
            abort(404);
        }

        if ($user->level == 'admin' && auth()->user()->level == 'admin') {
            abort(404);
        }

        if ($user->image != 'default.jpg') {
            File::delete(public_path('user-img/' . $user->image));
        }

        $level = $user->level;

        $user->delete();

        session()->flash('message', 'User successfully removed');

        if($level == 'new') {
            return redirect(route('users.new'));
        }

        return redirect(route('users.index'));
    }

    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'first-name' => 'required',
            'last-name' => 'required',
            'email' => 'nullable|Email|unique:users',
            'national-code' => 'required|unique:users,username',
            'tel' => 'required',
            'address' => 'required',

        ], [
            'first-name.required' => 'Please enter your username',
            'last-name.required' => 'Please enter the last name of the user',
            'email.email' => 'Please enter user email correctly',
            'email.unique' => 'اEmail already exist',
            'national-code.required' => 'Please enter the username',
            'national-code.unique' => 'Username entered already exists ',
            'tel.required' => 'Please enter the user phone number',
            'address.required' => 'Please enter the user address',

        ]);

        User::create([
            'username' => request('national-code'),
            'firstName' => request('first-name'),
            'lastName' => request('last-name'),
            'email' => request('email'),
            'tel' => request('tel'),
            'address' => request('address'),
            'password' => bcrypt(request('national-code')),
            'level' => 'user',
        ]);

        session()->flash('message', 'User successfully added');

        return back();
    }

    public function search()
    {
        if (!request('search')) {
            $usersChunk = [];
            return view('admin.user.search', compact('usersChunk'));
        } else {
            $users = User::search(request('search'))->get();
            $usersChunk = $users->chunk(1);
            return view('admin.user.search', compact('usersChunk'));
        }
    }
}
