<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;

class BookController extends Controller
{
    public function index()
    {
        return view('books.index', [
            'books' => Book::with(['author', 'category'])->get(),
            'authors' => Author::all(),
            'categories' => Category::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
            'category_id' => 'required|exists:categories,id',
        ]);
        Book::create($request->only('title', 'author_id', 'category_id'));

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
