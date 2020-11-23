<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;

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
        $categories = Category::all();
        return view('post.create',compact('categories'));
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
        // $post = new Post;
        // $post->title    =   $request->title;
        // $post->content  =   $request->content;
        // $post->save();

        // $post->fill([
        //     'title'     => $request->title,
        //     'content'   => $request->content
        // ]);
        // $post->save();
       


        // $request->file('cover') 暫存
        // $request->file('cover')->store('images'); 上傳到 storage/app/images 檔名隨機產生
        // $request->file('cover')->store('images','public'); storage/app/public/images 檔名隨機產生
        // $request->file('cover')->storeAs('public/images','qqq'); storage/app/public/images 檔名自訂
        // $request->file('cover')->getClientOriginalName(); 取得原始檔名
        // $request->file('cover')->getClientOriginalExtension(); 取得副檔名
        
        //驗證
        // $request->validate([
        //     'title'     => 'required | max:10',
        //     'content'   => 'required | max:200'
        // ]);
        
        // if($request->file('cover')){
        //     $ext = $request->file('cover')->getClientOriginalExtension();
        //     $cover = Str::uuid().'.'.$ext;
        //     $request->file('cover')->storeAs('public/images',$cover);
        // }else{
        //     $cover = '';
        // }

        // $post = new Post;
        // $post->fill($request->all());
        // $post->cover = $cover;
        // $post->user_id = Auth::id();
        // $post->category_id = $request->category_id;


        $tags = explode(',',$request->tag);
        // dd($tags);
        foreach($tags as $tag){
            $t = Tag::firstOrCreate(['title'=> $tag]);
            // $t = Tag::create(['title'=> $tag]);
            // dd($tag);
        }



        // $post->save();
        // return redirect()->route('post.index');

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
        $categories = Category::all();
        return view('post.edit',compact('post','categories'));
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
        $post->category_id = $request->category_id;
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
