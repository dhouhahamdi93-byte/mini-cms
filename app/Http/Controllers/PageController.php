<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('a-propos', [
            'auteur' => 'Dhouha Hamdi',
            'groupe' => 'MDW33',
        ]);
    }
}