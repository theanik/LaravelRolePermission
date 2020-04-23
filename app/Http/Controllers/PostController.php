<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $validation;
    public function __construct()
    {
        $this->validation = (new Post())->valodationRules();
    }
    public function index()
    {
        $posts = Post::all();
        return view('post.index',compact('posts'));
    }

    public function create()
    {
        // return "aaa";
        return view('post.create');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit',compact('post'));
    }

    public function store(Request $req)
    {
        $post = new Post;
        $req->validate($post->valodationRules());
        $post->fill($req->all())->save();
        // $this->index();
        return redirect()->route('post.index');
    }


    public function delete($id)
    {
        return $id;

        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('post.index');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show',compact('post'));
    }


    public function update(Request $req,$id)
    {
        $post = Post::findOrFail($id);
        $req->validate($this->validation);
        $post->title = $req->title;
        $post->body = $req->body;
        $post->save();
        return redirect()->route('post.index');
        

    }


}
