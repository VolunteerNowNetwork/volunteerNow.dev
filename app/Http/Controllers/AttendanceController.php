<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Attendance;
use Auth;
use App\Http\Controllers\EmployeeController;
use App\Providers\User;

use Log;
use DB;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts =\App\Models\Post::get(['title']);
        $data['posts'] = $posts;

        $post = \App\Models\Post::find('id');



        // $user = \App\User::findOrFail($id);
        // $data['user'] = $user;

        return view('attendance.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attendance = new Attendance();
        $attendance->user_id = Auth::user()->id;
        $attendance->event_id = $request->event_id;
        $attendance->title = $request->title;
        $attendance->location = $request->location;
        $attendance->organization_name = $request->organization_name;
        $attendance->employer_id = Auth::user()->employer_id;
        $attendance->name =  Auth::user()->name;
        $attendance->start = $request->start;
        $attendance->hrs_to_complete = $request->hrs_to_complete;
        $attendance->num_of_people = $request->num_of_people;
        $attendance->hours_completed = $request->hours_completed;
        $attendance->did_they_attend = $request->did_they_attend;
        $attendance->save();

        $request->session()->flash("successMessage", "You have signed up successfully!");

        Log::info($attendance);

        return \Redirect::action('EmployeeController@show', $attendance->user_id);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        if (!$post) {
            abort(404);
        }

        $data['post'] = $post;

        return view('attendance.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attendance =\App\Models\Attendance::findOrFail($id);

        if(!$attendance) {
                abort(404);
        }

        $data['attendance'] = $attendance;

        return view('attendance.edit', $data);
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
        // $attendance = \App\Models\Attendance::findOrFail($id);

        // $attendance->did_they_attend = $request->did_they_attend;
        // $attendance->hours_completed = $request->hours_completed;

        // $attendance->save();

        // $request->session()->flash("successMessage", "Your have validated successfully");

        return \Redirect::action('NonprofitController@show', Auth::id());
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
