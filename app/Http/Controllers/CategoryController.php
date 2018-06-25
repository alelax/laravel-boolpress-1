<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4'
        ]);

        $data = $request->all();

        $data['slug'] = str_slug($data['name']);

        $slugEsistente = Category::where('slug', $data['slug'])->first();

        if (!empty($slugEsistente)) {
            return 'Errore, slug, esitente, provare a cambiare nome';
        }

        $newCategory = new Category;
        $newCategory->fill($data);

        $newCategory->save();

        return redirect()->route('categories.index');
    }

}
