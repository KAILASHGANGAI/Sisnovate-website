<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    #insert contact details 
    public function insert(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);
        $contact = contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message

        ]);
        if ($contact) {
            return back()->with('success', 'Message Sent Successfully');
        }
        # return back with inpput and message 
        return back()->withInput()->with('error', 'Something went wrong, please try again');
    }
}
