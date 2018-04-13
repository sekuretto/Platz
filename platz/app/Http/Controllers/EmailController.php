<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;

class EmailController extends Controller
{
    public function send(Request $request){
        $title = $request->input('subject');
        $content = $request->input('message');
    }
    Mail::send('emails.contact', ['subject' =>$title, 'message' => $content], function ($message) 
    {
        $message->from('me@gmail.com', 'Mie');
        
        $message->to('chirn@scotch.io');
        
    });
    
    return response()->json(['message' => 'Request completed']);
        
}
