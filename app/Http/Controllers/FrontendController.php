<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

    function home(){
        return view('welcome');
    }

    function about(){
        return view('about');
    } 

    function user_home(){
        return view('user_home');
    } 

    function contact_us(){
        return view('contact_us');
    } 
      
    function brances(){
        return view('brances');
    } 
    
    public function userHome()
    {
        $books = Book::all();
        return view('user_home', compact('books'));
    }
    
    
}
