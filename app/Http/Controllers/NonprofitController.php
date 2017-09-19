<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Post;
use App\Models\Attendance;
use Auth;
use App\Models\BaseModel;
use Carbon\Carbon;

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
        //
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
        //
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

        $organization_name = Auth::user()->organization_name;

        $events = \App\Models\Post::where('organization_name', $organization_name)->get();

        $organizationEventAttendees = \App\Models\Attendance::select('event_id', DB::raw('COUNT(*) AS attendance'))->where('organization_name', $organization_name)->groupBy('title')->get();

        $attendees = \App\Models\Attendance::where('organization_name', $organization_name)->whereNull('did_they_attend')->get();

        $attendanceArray = [];
        foreach($organizationEventAttendees as $event) {
            $eventId = $event['event_id'];
            $attendanceArray["$eventId"] = $event['attendance'];
        }
        $nonprofitEvents = \App\Models\Post::where('organization_name', $organization_name)->get();

        if (!$user) {
            abort(404);
        }

        $data['user'] = $user;
        $data['organization_name'] = $organization_name;
        $data['events'] = $events;
        $data['nonprofitEvents'] = $nonprofitEvents;
        $data['attendanceArray'] = $attendanceArray;
        $data['attendees'] = $attendees;

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
