<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $data = [
            'title' => 'Homepage Boolpress'
        ];

        return view('home.index', $data);
    }

}
