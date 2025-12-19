<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Author::create(['name' => $request->name]);

        return redirect()->back()->with('success', 'Author added');
    }

    public function show(Author $author)
    {
        return view('authors.show', compact('author'));
    }

    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, Author $author)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $author->update(['name' => $request->name]);

        return redirect()->route('books.index')->with('success', 'Author updated');
    }

    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->back()->with('success', 'Author deleted');
    }
}
