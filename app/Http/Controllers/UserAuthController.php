<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }
    public function blog(){
        $posts = Post::all();
        $user = Auth::guard('student')->user();
        return view('students.blog',compact('posts','user'));
    }

    public function loginpage(){
        return view('students.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');
        
        if (Auth::guard('student')->attempt($credentials)) {
            $user = Auth::guard('student')->user();
            return redirect()->route('welcome');
        } else {
            toastr()->error('Login Failed');
            return redirect()->route('welcome');
        }
        
    }

    public function logout(Request $request)
    {
        Auth::guard('student')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('welcome');
    }
}
