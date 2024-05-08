<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::where('student_id', Auth::guard('student')->user()->id)->get();
        return view('myposts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
    
        // Create a new post instance
        $post = new Post();
        $post->title = $validatedData['title'];
        $post->content = $validatedData['content'];
        $post->student_id = auth()->guard('student')->id(); 
    
        // Save the post to the database
        $post->save();
    
        // Redirect the user to a relevant page
        toastr()->success('Post Saved');
        return redirect()->route('blog');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $comments = Comment::where('post_id', $post->id)->get();
        //dd($comments);
        return view('commentview', compact('post','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'string|max:255',
            'content' => 'string',
        ]);
    
        $post->title = $request->input('title');
        $post->content = $request->input('content');
    
        $post->save();
        toastr()->success('Post Updated');
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {

        $post -> delete();
        toastr()->success('Post Deleted');
        return redirect()->back();
    }
}
