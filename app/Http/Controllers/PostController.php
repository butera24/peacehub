<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Auth::guard('student')->user();
        $posts = Post::where('student_id', $student)->get();
        return view('students.blog', compact('posts'));
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
        // Assuming you have a relationship with the authenticated student
        $post->student_id = auth()->guard('student')->id(); // or however you retrieve the authenticated student ID
    
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
