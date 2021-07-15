<?php

namespace App\Http\Controllers;

use App\Book;
use App\BookCategory;
use Illuminate\Http\Request;

class BookCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = BookCategory::all();
        return view('admin.book.categories', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:book_categories,name',
        ], [
            'name.required' => 'Please enter a category name',
            'name.unique' => 'Category already entered',
        ]);

        BookCategory::create([
            'name' => $request->input('name'),
        ]);

        session()->flash('message', 'DONE');
        return redirect(route('book-categories.index'));
    }

    public function destroy(Request $request)
    {
        $this->validate($request, [
            'delete-category' => 'required|exists:book_categories,id',
            'replace-category' => 'required|exists:book_categories,id|different:delete-category',
        ], [
            'delete-category.required' => 'Please select a category to delete',
            'delete-category.exists' => 'The category entered to delete does not exist',
            'replace-category.required' => 'Please select an alternative category',
            'replace-category.exists' => 'Alternate category entered is not available',
            'replace-category.different' => 'Alternate category should not be the same as the category selected for deletion',
        ]);

        Book::where('category_id', $request->input('delete-category'))->update([
            'category_id' => $request->input('replace-category'),
        ]);

        BookCategory::find($request->input('delete-category'))->delete();

        session()->flash('message', 'DONE');
        return redirect(route('book-categories.index'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'update-category' => 'required|exists:book_categories,id',
            'update-category-name' => 'required|unique:book_categories,name',
        ], [
            'update-category.required' => 'Please select a category to edit',
            'update-category.exists' => 'The imported category is not available for editing',
            'update-category-name.required' => 'Please select a new category name',
            'update-category-name.unique' => 'The category name already entered exists',
        ]);

        BookCategory::find($request->input('update-category'))->update([
            'name' => $request->input('update-category-name'),
        ]);

        session()->flash('message', 'DONE');
        return redirect(route('book-categories.index'));
    }
}
