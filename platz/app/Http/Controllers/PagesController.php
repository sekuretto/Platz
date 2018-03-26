<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
}
