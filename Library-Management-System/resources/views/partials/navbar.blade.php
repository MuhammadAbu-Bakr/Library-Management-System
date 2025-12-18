   <meta name="csrf-token" content="{{ csrf_token() }}">

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('welcome') }}">LMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('books.index') }}">Books</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('members.index') }}">Members</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('members.index') }}">Issue</a></li>
                </ul>
            </div>
        </div>
    </nav>
<hr>