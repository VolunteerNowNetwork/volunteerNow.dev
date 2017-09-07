<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

use Log;
use DB;

class NonprofitController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'create', 'edit']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users= \App\User::all();
        $data['users'] = $users;

        return view('nonprofit.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nonprofit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = new User();
        $user->organizationName = $request->organizationName;
        $user->admin = $request->admin;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->websiteLink = $request->websiteLink;
        $user->contactNumber = $request->contactNumber;
        $user->email = $request->email;
        $user->bio = $request->bio;
        $user->benefit = $request->benefit;
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
    public function show($id)
    {
        $user = \App\User::findOrFail($id);

        if (!$user) {
            abort(404);
        }

        $data['user'] = $user;

        return view('nonprofit.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = \App\User::findOrFail($id);

        if (!$user) {
            abort(404);
        }

        $data['user'] = $user;

        return view('nonprofit.edit', $data);
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
        $user = User::findOrFail($id);

        $user->organization_name = $request->organization_name;
        $user->admin = $request->admin;
        $user->username = $request->username;
        $user->bio = $request->bio;

        $user->save();

        $request->session()->flash("successMessage", "Your post was updated successfully");

        return \Redirect::action('NonprofitController@show', $user->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
