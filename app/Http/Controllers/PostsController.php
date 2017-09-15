<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Providers\User;
use App\Models;

use Log;
use DB;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
     {
         $this->middleware('auth', ['except' => ['index', 'show', 'create', 'store']]);
     }

    public function index()
    {
        $posts = \App\Models\Post::get(['title', 'start', 'end', 'color']);
        
        $data['posts'] = $posts;

        return Response()->json($posts);

    }

    public function all(Request $request)
    {
        $posts = Post::all();

        if($request->has('q')) {
            $q = $request->q;
            $posts = Post::search($q);
        }

        $data['posts'] = $posts;

        return view('posts.allPosts', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.nonprofitPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->user_group = $request->user_group;
        $post->organization_name = $request->organization_name;
        $post->title = $request->title;
        $post->start = $request->start;
        $post->end = $request->end;
        $post->color = $request->color;
        $post->location = $request->location;
        $post->number_of_hours = $request->number_of_hours;
        $post->number_of_volunteers = $request->number_of_volunteers;
        $post->age_restriction = $request->age_restriction;
        $post->point_of_contact_name = $request->point_of_contact_name;
        $post->point_of_contact_number = $request->point_of_contact_number;
        $post->supplies_needed = $request->supplies_needed;
        $post->appropriate_attire = $request->appropriate_attire;
        $post->categories = $request->categories;
        $post->save();

        $request->session()->flash("successMessage", "Your post was saved successfully");

        Log::info($post);

        return view('masterCalendar');
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

        $events = \App\Models\Attendance::where('user_id', $id)->get();

        $data['events'] = $events;
        $data['post'] = $post;

        return view('posts.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post =\App\Models\Post::findOrFail($id);

            if(!$post) {
                abort(404);
            }

            $data['post'] = $post;

            return view('posts.edit', $data);
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
        $post = Post::findOrFail($id);

        $post->title = $request->title;
        $post->start = $request->start;
        $post->end = $request->end;
        $post->location = $request->location;
        $post->number_of_hours = $request->number_of_hours;
        $post->number_of_volunteers = $request->number_of_volunteers;
        $post->age_restriction = $request->age_restriction;
        $post->point_of_contact_name = $request->point_of_contact_name;
        $post->point_of_contact_number = $request->point_of_contact_number;
        $post->supplies_needed = $request->supplies_needed;
        $post->appropriate_attire = $request->appropriate_attire;
        $post->categories = $request->categories;

        $post->save();

        $request->session()->flash("successMessage", "Your event was updated successfully");

        return \Redirect::action('PostsController@show', $post->id);
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
