<?php

namespace App\Http\Controllers;

use App\Article;
use App\Book;

use App\User;
use Carbon\Carbon;
use Creativeorange\Gravatar\Facades\Gravatar;
use Illuminate\Http\Request;

use Morilog\Jalali\Jalalian;

class HomeController extends Controller
{  
    public function index()
    {
        return redirect()->route('dashboard');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $users_count = User::where('level', '!=', 'new')->count();
        $books_count = Book::all()->count();

        return view('admin.dashboard', compact('users_count', 'books_count'));
    }


    public function profile()
    {
        $user = auth()->user();
        return view('admin.profile', compact('user'));
    }


    //search book
    public function bookSearch(Request $request)
    {
        if ($request->ajax()) {
            if (!request('search')) {
                return [];
            }
            $books = Book::search(request('search'))->orderBy('name')->get();
            $results = [];
            $i = 0;
            foreach ($books as $book) {
                $results[$i]['id'] = $book->id;
                $results[$i]['name'] = $book->name;
                $results[$i]['author'] = $book->author;
                $results[$i]['category'] = $book->category->name;
                $results[$i]['bookmaker'] = $book->bookmaker;
                $results[$i]['ed_year'] = $book->ed_year;
                
                $i++;
            }
            return response()->json($results);
        }

        return view('admin.book.search');
    }

}
