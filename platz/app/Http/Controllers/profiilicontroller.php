<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profiilicontroller extends Controller
{
    public function showinfo()
    {
        return view('profiili2');
    }

    public function viewfromfolder()
    {
        return view('esim/profiili2');
    }

    public function viewfromfolder2()
    {
        return view('esim.profiili3');
    }


    public function returninfo()
    {
        return 'Controllerin return-lause';
    }

}