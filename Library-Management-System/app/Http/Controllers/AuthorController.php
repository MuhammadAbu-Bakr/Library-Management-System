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

    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->back()->with('success', 'Author deleted');
    }
}
