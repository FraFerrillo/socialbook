<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;

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

    public function store(PostRequest $request){

        Post::create([
            'user_id'=>$request->user_id,
            'body'=>$request->body,
            'img'=>empty($request->file('img')) ? null : $request->file('img')->store('public/img'),
            // 'created_at'=>$request->created_at,
            // 'updated_at'=>$request->updated_at,
        ]);
        return redirect()->back()->with('message','Post pubblicato con successo!');
    }


    public function index($orderBy = 'created_at')
    {
        $posts = Post::orderByDesc('created_at')->get();
        return view('homepage', compact('posts'));

    }

    public function postsAttachUser(post $post)
    {
        Auth::user()->postsLike()->attach($post->id);
        return redirect()->back();
    }

    public function postsDetachUser(post $post)
    {
        Auth::user()->postsLike()->detach($post->id);
        return redirect()->back();
    }
 
    // public function postsIndexUser(post $post)
    // {
    //     $posts = Auth::user()->postsLike()->get();
    //     return view('posts.index_user', compact('posts'));
    // }



}
