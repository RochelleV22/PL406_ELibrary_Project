<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/register';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if(option('userRegister', 'off') == 'off') {
            abort(404);
        }
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first-name' => 'required',
            'last-name' => 'required',
            'national-code' => 'required|unique:users,username',
            'email' => 'required|email|unique:users',
            'tel' => 'required',
            'address' => 'required',
            'register-terms' => 'required',
        ], [
            'first-name.required' => 'Please enter your name',
            'last-name.required' => 'Please enter your last name',
            'national-code.required' => 'Please enter your username',
            'national-code.unique' => 'The entered username already exists',
            'email.required' => 'Please enter your email',
            'email.email' => 'Please enter a valid email',
            'email.unique' => 'The entered email already exists',
            'tel.required' => 'Please enter your phone number',
            'address.required' => 'Please enter your address',
            'register-terms.required' => 'Please read the terms',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstName' => $data['first-name'],
            'lastName' => $data['last-name'],
            'username' => $data['national-code'],
            'email' => $data['email'],
            'tel' => $data['tel'],
            'address' => $data['address'],
            'password' => bcrypt($data['national-code']),
        ]);

    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath())->with('status', 'Thanks to your membership, you can log in to your account after the administrator confirms.');
    }
}
