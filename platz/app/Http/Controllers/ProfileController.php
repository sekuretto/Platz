<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class ProfileController extends Controller
{
    public function show($name)
    {
        $user = User::find($name);
        return $user;
    }
}