<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //to display insert form
    function create(){
        return view('backend.book.create');
    }

    function store(Request $request){
        $request->validate([
            'name' => 'required',
            'author_name' => 'required',
            'file_photo_upload' => 'required|min:1|max:10000|mimes:jpg,jpeg,bmp,png'
        ]);
        if ($request->hasFile('file_photo_upload')){
            $file = $request->file('file_photo_upload');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move('assets/images/book',$fileName);
            $request->request->add(['file_photo' => $fileName]); 
            
        }
        
        
        if(Book::create($request->all())){
            request()->session()->flash('success','Book Added successfully');
        } else {
            request()->session()->flash('error','Book cannot be addded');
        }
        return redirect()->route('backend.book.index');
    }

    function index(){
        $books = Book::orderBy('name')->get();
        //send data from controller to view
        return view('backend.book.index',compact('books'));
    }

    function show($id){
        $book = Book::findOrFail($id);
        return view('backend.book.show',compact('book'));
    }

    function  destroy($id){
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('backend.book.index');
    }

    function edit($id){
        $book = Book::findOrFail($id);
        return view('backend.book.edit',compact('book'));
    }

    function update(Request $request,$id){
        $request->validate([
            'name' => 'required',
            'author_name' => 'required'
        ]);
        $book = Book::findOrFail($id);
        if($book->update($request->all())){
            request()->session()->flash('success','Book Added successfully');
        } else {
            request()->session()->flash('error','Book cannot be Added');
        }
        return redirect()->route('backend.book.index');
    }
}