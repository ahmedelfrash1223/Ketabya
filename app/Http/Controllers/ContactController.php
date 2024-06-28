<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){

    // Validate the form data
    $data = $request->validate([
        'fname' => 'required|string|max:255',
        'lname' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    // Create a new contact
    Contact::create($data);

    // Redirect back or wherever you want after storing
    return back()->with('status', 'Message sent successfully!');
}
}