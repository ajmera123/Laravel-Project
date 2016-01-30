<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreatePagesRequest;
use App\Page;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function index(){
    	return view('pages.index');
    }

    public function store( CreatePagesRequest $request  )
    {
    	// $page =Page::create( $request->all() );
    	Page::where( 'id', 1 )->update( ['page_name' => $request->input( 'page_name' )] );

    	return rediret()->back();
    }
}
