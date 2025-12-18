<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'  => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year'   => 'required|integer'
        ]);

        Book::create($request->only(['title', 'author', 'year']));

        return redirect()
            ->route('books.index')
            ->with('success', 'Book added successfully');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()
            ->route('books.index')
            ->with('success', 'Book deleted successfully');
    }
}
