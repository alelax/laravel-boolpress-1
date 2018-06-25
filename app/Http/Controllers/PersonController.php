<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{

    public function index(Request $request)
    {
        $data = $request->all();

        $people = Person::isConfirmed()->nameEq('Michele')->get();

        //$people = Person::where('is_confirmed', true)->get();

        return view('people.index', compact('people'));
    }

}
