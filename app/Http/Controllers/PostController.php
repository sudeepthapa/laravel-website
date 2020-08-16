<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index(){
        return view('posts.list');
    }

    public function create(){
        return view('posts.create');
    }
    
    public function store(Request $req){

        return redirect()->route('post.index');
    }
    
    public function edit($id){
        $post = "Find post whose id is $id";
        return view('posts.edit')->with('post', $post);
    }
    
    public function update(Request $req, $id){
        echo $req->title;
        echo $req->description;
        
        return redirect()->route('post.index');
    }
    
    public function show($id){
        $post = "Find post whose id is $id";
        return view('posts.show')->with('post', $post);
    }
    
    public function destroy($id){
        //Logic for deleting post
        
        return redirect()->route('post.index');
    }

}
