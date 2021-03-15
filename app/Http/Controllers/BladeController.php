<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function index()
    {
        $fruits = array(
            0 => 'Mangga',
            1 => 'Anggur',
            2 => 'Apel',
            3 => 'Ceri',
        );

        $name = array(
            0 => 'lenitiara'
        
        );


	return view('pages.home', compact('name', 'fruits'));
    }

    public function about()
    {
	return view('pages.about');
    }

    public function contact()
    {
	return view('pages.contact');
    }

   
}
