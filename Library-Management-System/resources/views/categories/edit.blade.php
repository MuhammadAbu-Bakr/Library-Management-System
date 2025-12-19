@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')
<div class="container mt-5">
    <h2>Edit Category</h2>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
        </div>
        <button class="btn btn-primary">Update Category</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection

