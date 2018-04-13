<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Post;

class PagesController extends Controller
{
    public function myynti() {  
        $posts = Post::all();
        return view('myynti')->with('posts', $posts);
    }
    public function osto() {
        $posts = Post::all();
        return view('osto')->with('posts', $posts);
    }
    public function vaihto() {
        $posts = Post::all();
        return view('vaihto')->with('posts', $posts);
    }
    
    public function getContact() {
        return view('contact');
    }
    
    public function postContact(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:5']);
        
        $data = array(
        'email' => $request->email,
        'subject' => $request->subject,
        'bodyMessage' => $request->message
        );
        
        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->to($data['email']);
            $message->subject($data['subject']);
        });
    }
}
