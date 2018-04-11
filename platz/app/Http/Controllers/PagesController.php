<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class PagesController extends Controller
{
    public function about()
    {
	$name = "<span style='background-color:#ffc;'>late on paras</span>";
        // return 'About Page';
        return view('pages.about')->with('name', $name);
    }

    public function about2()
    {

	$people = [];
	$people[] = 'late';
	$people[] = 'taneli';

	$data = [];
	$data['first'] = 'Raaka';
	$data['last'] = 'Arska';

	return view('pages.about2')->with('people', $people);

	/* TAI NÃ„IN:
        return view('pages.about2')->with([
		'first' => 'Raaka',
		'last'  => 'Arska'
	]);
	*/
    }
    public function add2()
    {
        //return "POOO";
        return view('add.index');
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
