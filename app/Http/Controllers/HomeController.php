<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Epizoda;
use App\Comment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('admin')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $epizode = Epizoda::all();
        $comments = Comment::all();
        return view('admin.home',compact('epizode','comments'));
    }
    public function comments()
    {

        $comments = Comment::all();
        return view('admin.comments',compact('comments'));
    }
}
