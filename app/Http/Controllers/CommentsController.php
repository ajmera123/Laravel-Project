<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Requests\CreateCommentsRequest;
use App\Comment;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{
    //
    public function create(){
    	return view('comments.create');
    }

    public function store(CreateCommentsRequest $request){
    	$inputs = $request->all();
    	$inputs['commented_to'] = 2;

    	Auth::user()->comments()->create( $inputs );
    }

    public function index()
    {
    	$users = \App\User::all();
        // return $users;
    	foreach ($users as $user) {
    		echo $user->name . '<br>';
    		foreach ($user->comments as $comment) {
    			echo $comment->commented_txt . '<br>';
    		}
    	}
    }
}
