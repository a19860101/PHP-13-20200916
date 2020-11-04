<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    function index(){
        $posts = DB::select('SELECT * FROM posts ORDER BY id DESC');
        return view('post.index',compact('posts'));
        // return $posts;
        // dd($posts);
    }
    function create(){
        return view('post.create');
    }
    function store(Request $request){
        DB::insert('INSERT INTO posts(title,content,created_at,updated_at)VALUES(?,?,?,?)',[
            $request->title,
            $request->content,
            now(),
            now()
        ]);

        return redirect()->route('post.index');
    }
    function show($id){
        $posts = DB::select('SELECT * FROM posts WHERE id = ?',[$id]);
        // return $posts;
        return view('post.show',compact('posts'));
    }
    function destroy(Request $request,$id){
        DB::delete('DELETE FROM posts WHERE id = ?',[$id]);
        return redirect()->route('post.index');
    }
    function edit($id){
        $posts = DB::select('SELECT * FROM posts WHERE id = ?',[$id]);
        return view('post.edit',compact('posts'));
    }
    function update(Request $request,$id){
        DB::update('UPDATE posts SET title=?,content=?,updated_at=? WHERE id = ?',[
            $request->title,
            $request->content,
            now(),
            $id
        ]);
        return redirect()->route('post.index');
    }
}
