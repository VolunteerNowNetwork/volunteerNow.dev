<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
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
         $this->middleware('auth', ['except' => ['index', 'show', 'create', 'edit']]);
     }
    public function index(Request $request)
    {
        $users =\App\User::all();
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
        $user = new User();
        $user->name = $request->name;
        //$user->user_group = $request->user_group;
        $user->password = $request->password;
        $user->employer_id = $request->employer_id;
        //$user->employee_id = rand()->employee_id;
        $user->contact_number = $request->contact_number;
        $user->email = $request->email;
        $user->bio = $request->bio;
        $user->available_hours = $request->available_hours;
        $user->save();
        $request->session()->flash("successMessage", "Your account was created successfully!");
        Log::info($user);
        return \Redirect::action('EmployeeController@index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = \App\User::find($id);
        $events = \App\Models\Attendance::where('user_id', $id)->get();
        $data['user'] = $user;
        $data['events'] = $events;
        return view('employee.show', $data);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = \App\User::find($id);
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
        // $this->validate($request, Employee::$rules);
        $user = \App\User::find($id);
        $user->name = $request->name;
        $user->user_group = $request->user_group;
        $user->password = $request->password;
        $user->employer_id = $request->employer_id;
        $user->contact_number = $request->contact_number;
        $user->email = $request->email;
        $user->bio = $request->bio;
        $user->available_hours = $request->available_hours;
        $user->completed_hours = $request->completed_hours;
        $user->save();
        $request->session()->flash("successMessage", "Your post was updated successfully");
        return \Redirect::action('EmployeeController@show', $user->id );
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
