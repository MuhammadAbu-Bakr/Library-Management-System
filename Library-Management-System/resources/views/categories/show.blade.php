@extends('layouts.app')

@section('title', 'View Category')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-info text-white">
            View Category Details
        </div>
        <div class="card-body">
            <h4>Name:</h4>
            <p>{{ $category->name }}</p>

            <a href="{{ route('books.index') }}" class="btn btn-primary mt-3">Back to List</a>
            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning mt-3">Edit Category</a>
        </div>
    </div>
</div>
@endsection

