<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Providers\User;

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
        $post->point_of_contact = $request->point_of_contact;
        $post->supplies_needed = $request->supplies_needed;
        $post->appropriate_attire = $request->appropriate_attire;
        $post->categories = $request->categories;
        $post->save();
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
