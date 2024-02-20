<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function view()
    {
        return view('contact');
    }

    public function create(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'purpose' => 'required',
                'message' => 'required'
            ]
        );

        // Get the currently authenticated user
        $user = auth()->user();

        $contacts = new Contact;
        $contacts->name = $request['name'];
        $contacts->email = $request['email'];
        $contacts->purpose = $request['purpose'];
        $contacts->message = $request['message'];

        if ($user) {
            $contacts->user_id = $user->id;
        }

        $contacts->save();

        return "Contact Created";
    }
}
