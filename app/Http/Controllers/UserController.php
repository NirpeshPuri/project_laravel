<?php
/* 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function verifyUser(Request $request)
    {
        $data = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ]
            );

            if(Auth::attempt($data))
            {
                return redirect()->route("backend.dashboard");
            }else{
                return redirect()->route('login')->withError(['email'=>'User not found']);
            }
    }
    
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
 
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'user_type' => 'required',
        ]);
 
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type' =>$request->user_type,
        ]);
 
        return redirect('/user/login')->with('success', 'Registration successful! Please log in.');
    }
    
    function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
} */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function verifyUser(Request $request)
    {
        $data = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
                'user_type' => 'required',
            ]
        );

        if (Auth::attempt($data)) {
            $user = Auth::user();
            if ($user->isAdmin()) {
                return redirect()->route("backend.admin.dashboard");
            } elseif ($user->isUser()) {
                return redirect()->route("backend.user.dashboard");
            }
        } else {
            return redirect()->route('login')->withErrors(['email' => 'User not found']);
        }
    }

    public function showRegistrationForm()
    {
        return view('user.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|min:6',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'user_type' => 'required',
            
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type' => $request->user_type,
            
        ]);

        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function dashboard()
    {
        return view('backend.dashboard');
    }

    public function adminDashboard()
    {
        return view('backend.dashboard');
    }

    public function userDashboard()
    {
        return view('user_home');
    }
}

