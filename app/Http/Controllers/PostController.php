<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('posts.create', compact('categories'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'title' => 'required|min:4',
            'content' => 'required|min:100',
            'categories' => 'required'
        ]);

        $data = $request->all();

        $data['slug'] = str_slug($data['title']);
        $existingSlug = Post::where('slug', $data['slug'])->first();

        if ($existingSlug) return 'Errore, slug esistente';

        $post = new Post;

        $post->fill($data);
        $post->save();

        foreach ($data['categories'] as $categoryId)
        {
            $existingCategory = Category::find($categoryId);

            if (!empty($existingCategory)) {
                $post->categories()->attach($categoryId);
            }
        }

        //primo metodo senza check
        //$post->categories()->sync($data['categories']);
    }

}
