<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Post;

class PostController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }

  public function index()
  {
    $posts = Post::all();
    return view('posts.index')->with('posts', $posts);
  }

  public function create()
  {
    return view('posts.create');
  }

  public function store(Request $request)
  {
    $this->validate($request, array(
            'message' => 'required'
    ));

    $post = new Post();
    $post->message = $request->message;
    $post->user_id = Auth::user()->id;
    $post->save();

    return redirect()->route('posts.index');
  }

  public function delete_all_post()
  {
    Post::truncate();

    return redirect()->route('posts.index');
  }
}
