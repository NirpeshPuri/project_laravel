<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contact_us');
    }

    public function submitContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:6',
            'phone' => 'required|regex:/^[0-9]{10}$/',
        ]);

        // Create a new contact record
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'phone' => $request->phone,
        ]);

        

        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
    
    /* function index(){
        $contacts = Contact::orderBy('name')->get();
        return view('contact_us.index',compact('contacts'));
    } */

    /* public function helpUser($id)
    {
        $helpUser = Contact::findOrFail($id);
        return view('backend.help_user', compact('helpUser'));
    } */
   function show()
   {
    $data=Contact::all();
    return view('backend/help_user',['contacts'=>$data]);
   }
   function  destroy($id){
    $contact = Contact::findOrFail($id);
    $contact->delete();
    return redirect()->route('backend/help_user');
}
}
