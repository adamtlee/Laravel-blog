<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        // Render a list of a resource
        $articles = Article::latest()->get(); 

        return view('articles.index', ['articles' => $articles]);
    }
    public function show(Article $article)
    {
        // Show a single resource
        // $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        // shows a view to create a new resource

        return view('articles.create');
    }

    public function store()
    {
        // Persist the new resource
        // dump(request()->all());

        $validatedAttributes = request()->validate([
            'title' => ['required', 'max:255'],
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        // $article = new Article();
        // $article->title = request('title');
        // $article->excerpt = request('excerpt');
        // $article->body = request('body');
        // $article->save();
        // Article::create([
        //     'title' => request('title'),
        //     'excerpt' => request('excerpt'),
        //     'body' => request('body')
        // ]);

        Article::create($validatedAttributes);

        return redirect('/blogs');
    }

    public function edit(Article $article)
    {
        // Show a view to edit an existing resource
        // $article = Article::find($id);

        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {
        // Persist the edited resource

        $article->update(request()->validate([
            'title' => ['required', 'max:255'],
            'excerpt' => 'required',
            'body' => 'required'
        ]));
        
        // $article = Article::find($id);

        // $article->title = request('title');
        // $article->excerpt = request('excerpt');
        // $article->body = request('body');

        // $article->save();

        return redirect('/blogs/' . $article->id);
    }

    public function destroy()
    {
        // Delete the resource
    }
}
