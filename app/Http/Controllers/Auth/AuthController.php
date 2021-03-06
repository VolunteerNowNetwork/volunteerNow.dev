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
    protected $redirectPath = "/dashboard";
    protected $loginPath = 'auth/login';
    protected $redirectAfterLogout = "auth/login";
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
        if($data['user_group'] == 'nonprofit') {
            return User::create([
                'user_group' => $data['user_group'],
                'organization_name' => $data['organization_name'],
                'admin' => $data['admin'],
                'username' => $data['username'],
                'password' => $data['password'],
                'website_link' => $data['website_link'],
                'contact_number' => $data['contact_number'],
                'email' => $data['email'],
                'bio' => $data['bio'],
                'image' => $data['image'],
                'benefit' => $data['benefit'],
            ]);
        } else if($data['user_group'] == 'employer') {
            return User::create([
                'user_group' => $data['user_group'],
                'organization_name' => $data['organization_name'],
                'admin' => $data['admin'],
                'username' => $data['username'],
                'password' => $data['password'],
                'email' => $data['email'],
                'contact_number' => $data['contact_number'],
                'website_link' => $data['website_link'],
                'tax_id' => $data['tax_id'],
                'bio' => $data['bio'],
                'image' => $data['image'],
                'additional_resources' => $data['additional_resources'],
                'corporate_sponsor' => $data['corporate_sponsor'],
                'with_who' => $data['with_who'],
            ]);
        } else {
              return User::create([
                 'name' => $data['name'],
                'user_group' => $data['user_group'] ,
                'contact_number' => $data['contact_number'],
                'employer_id' => $data['employer_id'],
                'organization_name' => $data['organization_name'],
                'bio' => $data['bio'],
                'image' => $data['image'],
                'available_hours' => $data['available_hours'],
                'password' => $data['password'],
                'email' => $data['email'],
            ]);
    }
}
}
