@extends('layouts.app')

@section('title', 'Books Management')

@section('content')
<div class="container mt-5">

    <h2 class="mb-4 text-center">📚 Books Management</h2>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        {{-- ADD BOOK FORM --}}
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    Add New Book
                </div>
                <div class="card-body">
                    <form action="{{ route('books.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Book Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Author</label>
                            <input type="text" name="author" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Published Year</label>
                            <input type="number" name="year" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-success w-100">
                            Add Book
                        </button>
                    </form>
                </div>
            </div>
        </div>

        {{-- BOOK LIST --}}
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    Books List
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Year</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($books as $book)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->author }}</td>
                                    <td>{{ $book->year }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Delete this book?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted">
                                        No books added yet.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
