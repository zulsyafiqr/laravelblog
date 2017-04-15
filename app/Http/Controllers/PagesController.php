<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PagesController extends Controller
{
    public function showAllposts(){
    	$varpost=Post::allI();

    	return view('posts')->with('postview', $varpost);
    }

    public function create_Post(){
    	return view('postform');
    }

    public function savePost(Request $request){

    	$this->validate($request, [
    		'title' => 'required max:60',
    		'story' => 'required max:100',
    		]);

    	$varpost=new Post;
    	$varpost->title=$request->input('title');
    	$varpost->story=$request->input('story');

    	$varpost->save();

    	return redirect()->route('post.index')->withSuccess('Post Created');

    }



    public function showContactUs(){
    	return view('contact');
    }
}