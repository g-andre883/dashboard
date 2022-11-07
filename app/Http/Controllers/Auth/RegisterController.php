<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
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
        // dd($data);
        return Validator::make($data, [
            'family_name'=> ['required', 'string', 'max:255'],
            'family_name_hiragana'=> ['required', 'string', 'max:255'],
            'personal_name'=> ['required', 'string', 'max:255'],
            'personal_name_hiragana'=> ['required', 'string', 'max:255'],
            'email'=> ['required', 'string', 'email', 'max:255', 'unique:users'],
            'login_id'=> ['required', 'string', 'max:255', 'unique:users'],
            'password'=> ['required', 'string', 'min:8', 'confirmed'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'family_name'=> $data['family_name'],
            'family_name_hiragana'=> $data['family_name_hiragana'],
            'personal_name'=> $data['personal_name'],
            'personal_name_hiragana'=> $data['personal_name_hiragana'],
            'email'=> $data['email'],
            'login_id'=> $data['login_id'],
            'password'=> Hash::make($data['password']),
        ]);
    }
}
