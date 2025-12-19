@extends('layouts.app')

@section('title', 'Edit Author')

@section('content')
<div class="container mt-5">
    <h2>Edit Author</h2>
    <form action="{{ route('authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $author->name }}" required>
        </div>
        <button class="btn btn-primary">Update Author</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection

