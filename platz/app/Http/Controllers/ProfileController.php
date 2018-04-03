<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use Auth;
class ProfileController extends Controller
{
    public function show($name)
    {
        return view('profile');
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'email' => 'required',
            'city' => 'required'
        ]);
        $user = User::find($id);
        $user->email = $request->input('email');
        $user->city = $request->input('city');
        $user->save();
        
        return redirect('/')->with('success','Tiedot muutettu onnistuneesti.');
    }
}