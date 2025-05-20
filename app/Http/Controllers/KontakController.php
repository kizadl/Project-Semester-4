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

        try {
        Mail::send('emails.contact', ['data' => $data], function ($message) use ($data) {
            $message->to('dzakiyyanyannas@gmail.com')
                    ->subject($data['subject'])
                    ->replyTo($data['email'], $data['name']);
        });

            return redirect()->route('user.home')->with('success', 'Pesan berhasil terkirim!');
        } catch (\Exception $e) {
            return back()->withErrors(['email' => 'Gagal mengirim email: ' . $e->getMessage()]);
        }
    }
}
