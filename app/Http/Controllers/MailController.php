<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    function send(Request $request)
    {
        $this->validate($request, [
        'message'     =>  'required|string',
        'email'  =>  'required|email',
    ]);

    $data = array(
        'message'      =>  $request->message,
        'email'   =>   $request->email,
    );

     Mail::to('pro@sarquentin.fr')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}
