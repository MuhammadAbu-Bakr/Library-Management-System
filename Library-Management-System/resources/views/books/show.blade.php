@extends('layouts.app')

@section('title', 'View Book')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-info text-white">
            View Book Details
        </div>
        <div class="card-body">
            <h4>Title:</h4>
            <p>{{ $book->title }}</p>

            <h4>Author:</h4>
            <p>{{ $book->author->name }}</p>

            <h4>Genre:</h4>
            <p>{{ $book->category->name }}</p>

            <a href="{{ route('books.index') }}" class="btn btn-primary mt-3">Back to List</a>
            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning mt-3">Edit Book</a>
        </div>
    </div>
</div>
@endsection
