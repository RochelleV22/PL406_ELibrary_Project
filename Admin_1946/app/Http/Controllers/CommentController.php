<?php

namespace App\Http\Controllers;

use App\Article;

class CommentController extends Controller
{
    public function store(Article $article)
    {
        $this->validate(request(), [
            'body' => 'required',
        ], [
            'body.required' => 'Comment text could not be empty',
        ]);

        $user = auth()->user();

        $article->comments()->create([
            'user_id' => $user->id,
            'body' => request('body')
        ]);

        session()->flash('message', 'Your comment was successfully submitted.');

        return back();
    }
}
