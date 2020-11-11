<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $posts = Post::all();
        // $posts = Post::get();
        // $posts = Post::orderBy('id','DESC')->get();
        $posts = Post::orderBy('id','DESC')->paginate(3);
        // $posts = Post::orderBy('id','DESC')->simplePaginate(3);

        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('post.create');
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
        $post = new Post;
        // $post->title    =   $request->title;
        // $post->content  =   $request->content;
        // $post->save();

        // $post->fill([
        //     'title'     => $request->title,
        //     'content'   => $request->content
        // ]);
        // $post->save();

        $post->fill($request->all());
        $post->user_id = Auth::id();

        $post->save();

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        // $post = Post::find($post->id);
        // $post = Post::findOrFail($post->id);
        // $post = Post::where('id',$post->id)->first();

        return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        // $post = Post::findOrFail($post->id);
        return view('post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        // $post = Post::findOrFail($post->id);

        // $post->fill([
        //     'title'     =>  $request->title,
        //     'content'   =>  $request->content
        // ]);

        $post->fill($request->all());
        $post->save();

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        // $post = Post::findOrFail($post->id);
        // $post->delete();

        // $post->delete();

        Post::destroy($post->id);
        return redirect()->route('post.index');
    }
}
