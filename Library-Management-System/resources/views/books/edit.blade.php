@extends('layouts.app')

@section('title', 'Edit Book')

@section('content')
<div class="container mt-5">
    <h2>Edit Book</h2>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $book->title }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Author</label>
            <select name="author_id" class="form-control">
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : '' }}>{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Genre</label>
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $book->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary">Update Book</button>
    </form>
</div>
@endsection
