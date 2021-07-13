<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('web.contact.contact-index');
    }

    public function contact_us_send_message(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            // 'captcha' => 'required|captcha'
        ]);


        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');
        $phone = $request->input('phone');

        $contact = new ContactUs();
        $contact->name = $name;
        $contact->email = $email;
        $contact->subject = $subject;
        $contact->message = $message;
        $contact->phone = $phone;
        $contact->seen = 0;
        $contact->save();

        return back();
    }


    public function view_inbox_messages()
    {
        $this->middleware('auth');


        $messages = ContactUs::orderBy('created_at', 'desc')->get();
        $seen_count = ContactUs::where('seen',0)->count();

        return view('admin.view_inbox', [
            'seen_count' => $seen_count,
            'messages' => $messages,
        ]);

    }


    public function view_individual_message(Request $request)
    {
        $msg_id = $request->input('id');

        $message = ContactUs::find($msg_id);
        $message->seen = 1;
        $message->save();


        return view('admin.view-individual-message', [
            'message' => $message,
        ]);
    }
}
