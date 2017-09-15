<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use Log;
use DB;
use App\Models;

class EmployerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' =>['index', 'show', 'create', 'edit']]);
    }
    public function index()
    {
        $users =\App\User::all();
        $data['users'] = $users;

        return view('employer.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employer.create');
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
        $user->organization_name = $request->organization_name;
        $user->admin = $request->admin;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->contact_number = $request->contact_number;
        $user->website_link = $request->website_link;
        $user->tax_id = $request->tax_id;
        $user->bio = $request->bio;
        $user->corporate_sponsor = $request->corporate_sponsor;
        $user->with_who = $request->with_who;
        $user->additional_resources = $request->additional_resources;
        $user->save();

        $request->session()->flash("successMessage", "Your account was created successfully!");

        Log::info($user);

        return \Redirect::action('EmployerController@index');
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
         if(!$user) {
            abort(404);
         }

        $feedback = \App\Models\Feedback::where('employer_id', Auth::user()->employer_id)->get();
        $signedUpemployees = \App\Models\Attendance::where('employer_id', Auth::user()->employer_id)->get();
        $attendees = \App\Models\Attendance::where('employer_id', Auth::user()->employer_id)->whereNotNull('did_they_attend')->get();
         
         $data['user'] = $user;
         $data['feedback'] = $feedback;
         $data['attendees'] = $attendees;
         $data['signedUpemployees'] = $signedUpemployees;
        return view('employer.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user =\App\User::findOrFail($id);

            if(!$user) {
                abort(404);
            }

            $data['user'] = $user;

            return view('employer.edit', $data);
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
        $user = \App\User::findOrFail($id);
        $user->organization_name = $request->organization_name;
        $user->user_group = $request->user_group;
        $user->admin = $request->admin;
        $user->username = $request->username;
        $user->contact_number = $request->contact_number;
        $user->website_link = $request->website_link;
        //$user->employer_id = $request->employer_id;
        $user->tax_id = $request->tax_id;
        $user->bio = $request->bio;
        $user->additional_resources = $request->additional_resources;
        $user->corporate_sponsor = $request->corporate_sponsor;
        $user->with_who = $request->with_who;
        $user->email = $request->email;
        $user->bio = $request->bio;
        $user->save();
        $request->session()->flash("successMessage", "Your post was updated successfully");

        return \Redirect::action('EmployerController@show', $user->id);

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
