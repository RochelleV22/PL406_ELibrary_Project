<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:articles-admin');
    }

    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('admin.article.index', compact('articles'));
    }
    
    public function create()
    {
        return view('admin.article.create');
    }

    public function store()
    {
        $this->validation();

        auth()->user()->articles()->create([
            'title' => request('title'),
            'body' => request('body'),
            'status' => request('status'),
        ]);

        session()->flash('message', 'Post created successfully.');
        return redirect('admin/articles');
    }

    public function update(Article $article)
    {
        $this->validation();

        $article->update([
            'title' => request('title'),
            'body' => request('body'),
            'status' => request('status'),
        ]);

        session()->flash('message', 'Post successfully updated.');
        return redirect(route('articles.edit', ['article' => $article->slug]));
    }

    public function destroy(Article $article)
    {
        $article->delete();

        session()->flash('message', 'The post was successfully deleted.');
        return redirect('admin/articles');
    }

    public function edit(Article $article)
    {
        return view('admin.article.edit', compact('article'));
    }

    private function validation()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
            'status' => 'required',
        ], [
            'title.required' => 'Please enter the title of the post',
            'body.required' => 'Please enter the text of the post',
            'status.required' => 'Please select the writing mode',
        ]);
    }
}
