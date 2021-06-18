<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Friend;
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
        $users = User::orderByDesc('id')->get();
        return view('homepage', compact('posts', 'users'));

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
    public function request(Request $request) {
        $user = Friend::all()->where('user_id_2', '=', Auth::user()->id)->where('user_id_1', '=', $request->user_id)->first();
        if ($request->isRequest) {
            $user->approved = true;
            $user->save();
            return [
                'user_id' => $request->user_id,
                'true' => true
            ];
        }
        // $user->delete();
        // return [
        //     'user_id' => $request->user_id,
        //     'true' => false
        // ];
    }

    public function indexFriends(Request $request) {
        $friend = new Friend;
        $friend->user_id_1 = Auth::user()->id;
        $friend->user_id_2 = $request->friend_id;
        $friend->save();

        return [
            'friend_id' => $request->friend_id
        ];
    }
    public function showFriends($id) {
        $user = User::find($id);
        return view('friend.show')->withUser($user);
    } 
    // public function indexUsers($orderBy = 'created_at')
    // {
    //     $users = User::orderByDesc('id')->get();
    //     return view('homepage', compact('users'));

    // }
    // public function postsIndexUser(post $post)
    // {
    //     $posts = Auth::user()->postsLike()->get();
    //     return view('posts.index_user', compact('posts'));
    // }



}
