<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Mail;
use Storage;

class PagesController extends Controller
{
    public function myynti() {  
        $posts = Post::where('category', 'myynti')->get();
        return view('myynti')->with('posts', $posts);
    }
    public function osto() {
        $posts = Post::where('category', 'osto')->get();
        return view('osto')->with('posts', $posts);
    }
    public function vaihto() {
        $posts = Post::where('category', 'vaihto')->get();
        return view('vaihto')->with('posts', $posts);
    }
    public function haku(Request $request) {
        $haku = $request->input('haku');
        $posts = Post::where('body', 'like', '%' . $haku . '%')-orWhere('title', 'like', '%' . $haku . '%')->get();
        return view('haku')->with('posts', $posts)->with('haku', $haku);
    }
    
    public function getContact() {
        return view('contact');
    }
    
    public function postContact(Request $request) {
        
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:5'
        ]);
        
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');
        
        Storage::put('palaute'.time().'.txt', 'Otsikko: '.$subject.', Email: '.$email.', Palaute: '.$message);
        return redirect('/')->with('success','Palaute lähetetty onnistuneesti.');
         
    }
}


/* 

$this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:5'
        ]);
        
        $data = array(
        'email' => $request->email,
        'subject' => $request->subject,
        'bodyMessage' => $request->message
        );
        
        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('hello@moi.fi');
            $message->subject($data['subject']);
        });

*/
