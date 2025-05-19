<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KontakController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::send('emails.contact', ['data' => $data], function ($message) use ($data) {
            $message->to('dzakiyyanyannas@gmail.com')
                    ->subject($data['subject'])
                    ->replyTo($data['email'], $data['name']);
        });

        return redirect()->route('home')->with('success', 'Pesan berhasil terkirim!');
    }
}
