<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactMessageController extends Controller
{
    public function create() 
    {
        return view('contact');
    }
    
    public function store(Request $request) 
    {
        dd($request->all());
    } 
}
