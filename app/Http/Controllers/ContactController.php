<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        if($request->method() == 'POST'){
            $body = "<p><b> Name: </b>{$request->input('name')}</p>";
            $body .= "<p><b> Email: </b>{$request->input('email')}</p>";
            $body .= "<p><b> Message: </b> <br>" .nl2br( $request->input('text') )
            ."</p>";
            Mail::to('adeyva@mail.ru')->send(new TestMail($body));
            $request->session()->flash('success', 'Сообщение отправлено');
            return redirect('/send');
        }
        $title = 'Hello Mail';
        return view('/send', compact('title'));
    }
}
