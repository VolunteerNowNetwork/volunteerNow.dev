<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Log;
use DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth', ['except' => ['index', 'show', 'create']]);
     }

    public function index(Request $request)
    {
        $users= \App\User::all();
        $data['users'] = $users;

        return view('employee.show', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Employee::$rules);
        $user = new User();
        $user->name = $request->name;
        $user->password = $request->password;
        $user->employer_id = $request->employer_id;
        $user->contact_number = $request->contact_number;
        $user->email = $request->email;
        $user->bio = $request->bio;
        $user->available_hours = $request->available_hours;
        $user->save();

        $request->session()->flash("successMessage", "Your account was created successfully!");

        Log::info($user);

        return \Redirect::action('NonprofitController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        return view('employee.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
         $data['user'] = $user;
        return view('employee.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, Employee::$rules);
        $user = User::find($id);
        $user->name = $request->name;
        $user->password = $request->password;
        $user->employer_id = $request->employer_id;
        $user->contact_number = $request->contact_number;
        $user->email = $request->email;
        $user->bio = $request->bio;
        $user->available_hours = $request->available_hours;;
        $user->save();
         $request->session()->flash("sucessMessage", "Your post was updated sucessfully");
         Log::info('Profile updated');
        return \Redirect::action('UserController@show', $user->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
		$user->delete();
         $request->session()->flash("sucessMessage", "Your post was deleted sucessfully");

        return \Redirect::action('EmployeeController@index');
    }
}
