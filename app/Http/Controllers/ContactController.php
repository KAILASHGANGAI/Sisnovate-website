<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Exception;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = contact::OrderBy('id', 'desc')->get();
        return view('admin.contact.index', compact('contacts'));
    }
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

    public function destroy($id)
    {

        try {
            $result = contact::find($id)->delete();

            if ($result) {
                return back()->with('success', 'Contact deleted successfully');
            }
            return back()->with('error', 'Something went wrong, please try again');
        } catch (Exception $th) {
            dd($th);
            //throw $th;
        }
    }
}
