<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
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
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'organization_name' => $data['organization_name'],
            'admin' => $data['admin'],
            'username' => $data['username'],
            'contact_number' => $data['contact_number'],
            'website_link' => $data['website_link'],
            'employer_id' => $data['employer_id'],
            'employee_id' => $data['employee_id'],
            'non_profit_id' => $data['non_profit_id'],
            'tax_id' => $data['tax_id'],
            'bio' => $data['bio'],
            'available_hours' => $data['available_hours'],
            'additional_resources' => $data['additional_resources'],
            'benefit' => $data['benefit'],
            'corporate_sponsor' => $data['corporate_sponsor'],
            'with_who' => $data['with_who'],
        ]);
    }

}
