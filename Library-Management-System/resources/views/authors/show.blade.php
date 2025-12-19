@extends('layouts.app')

@section('title', 'View Author')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-info text-white">
            View Author Details
        </div>
        <div class="card-body">
            <h4>Name:</h4>
            <p>{{ $author->name }}</p>

            <a href="{{ route('books.index') }}" class="btn btn-primary mt-3">Back to List</a>
            <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning mt-3">Edit Author</a>
        </div>
    </div>
</div>
@endsection

