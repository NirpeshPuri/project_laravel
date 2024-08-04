<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //function to load home page
    function home(){
        return view('welcome');
    }

    //function to load about page
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
    
    
}
