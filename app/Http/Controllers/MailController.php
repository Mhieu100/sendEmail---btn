<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function sendMail()
    {
        $mailData = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp.'
        ];

        Mail::to('baoleduy2401@gmail.com')->send(new DemoMail($mailData));
        return redirect('/')->with('message', "Email is sent successfully.");
    }
}