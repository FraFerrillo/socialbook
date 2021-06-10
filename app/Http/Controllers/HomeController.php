<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create(){

        return view('homepage');
    }

    public function store(Request $request){
        Post::create($request->all());

        return redirect()->back()->with('message','Post pubblicato con successo!');
    }


    public function index($orderBy = 'created_at')
    {
        $posts = Post::orderByDesc('created_at')->get();
        return view('homepage', compact('posts'));

    }
}
