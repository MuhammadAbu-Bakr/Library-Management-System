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
        $totalBooks = Book::count();
        return view('books.index', [
            'books' => Book::with(['author', 'category'])->get(),
            'authors' => Author::all(),
            'categories' => Category::all(),
            'totalBooks' => $totalBooks,
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

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('books.edit', compact('book', 'authors', 'categories'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
            'category_id' => 'required|exists:categories,id',
        ]);

        $book->update($request->only('title', 'author_id', 'category_id'));

        return redirect()
            ->route('books.index')
            ->with('success', 'Book updated successfully');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()
            ->route('books.index')
            ->with('success', 'Book deleted successfully');
    }
}
