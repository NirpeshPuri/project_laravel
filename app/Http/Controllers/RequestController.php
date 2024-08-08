<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BookRequest;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'book_id' => 'required|exists:books,id',
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
        ]);

        BookRequest::create([
            'book_id' => $validatedData['book_id'],
            'full_name' => $validatedData['full_name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Your request has been submitted.');
    }
    function showRequest()
   {
    
    $data=BookRequest::all();
   
    return view('backend/book/book_request',['book_requests'=>$data]);
   }

   public function approve($id)
    {
        $request = BookRequest::findOrFail($id);
        $request->status = 'approved';
        $request->save();

        return redirect()->route('book_request')->with('success', 'Request approved successfully.');
    }

    public function decline($id)
    {
        $request = BookRequest::findOrFail($id);
        $request->status = 'declined';
        $request->save();

        return redirect()->route('book_request')->with('error', 'Request declined successfully.');
    }
}
