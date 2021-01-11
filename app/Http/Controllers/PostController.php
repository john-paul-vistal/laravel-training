<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('post.index',compact('posts'));
    }

    public function create(){
      return view('post.create');
    }

    public function store(Request $request){
      $post = new Post();

      $post->title = $request->title;
      $post->body = $request->body;

    $post->save();

    return redirect('/posts');
    }

    public function edit(Post $post){
        return view('post.edit',compact('post'));
    }

    public function update(Request $request,Post $post){

      $post->update([
          "title" => $request->title,
          "body" => $request->body
      ]);

      return redirect('/posts');
    }

    
    public function destroy(Post $post){
       $post->delete();

       return redirect('/posts');
    }

    
   
}
