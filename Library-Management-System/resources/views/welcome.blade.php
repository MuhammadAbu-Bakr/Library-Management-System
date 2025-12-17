<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">LMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Books</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Members</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Issue</a></li>
                </ul>
            </div>
        </div>
    </nav>

   
    <header class="bg-primary text-white py-5">
        <div class="container text-center">
            <h1>Library Management System</h1>
            <p class="lead mt-2">
                Manage books, members, inventory, and issuing records efficiently.
            </p>
        </div>
    </header>

    
    <section class="container my-5">
        <div class="row text-center g-4">
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3>120</h3>
                        <p class="text-muted mb-0">Total Books</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3>45</h3>
                        <p class="text-muted mb-0">Members</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3>18</h3>
                        <p class="text-muted mb-0">Issued Books</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3>3</h3>
                        <p class="text-muted mb-0">Overdue</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <main class="container mb-5">
        <h3 class="mb-4 text-center">System Modules</h3>
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h4>Manage Books</h4>
                        <p>Add, update, and categorize library books.</p>
                        <a href="#" class="btn btn-primary">Open</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h4>Manage Members</h4>
                        <p>Register members and manage memberships.</p>
                        <a href="#" class="btn btn-primary">Open</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h4>Inventory</h4>
                        <p>Track book stock and availability.</p>
                        <a href="#" class="btn btn-primary">Open</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h4>Issue Books</h4>
                        <p>Issue, return, and track overdue books.</p>
                        <a href="#" class="btn btn-primary">Open</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h4>Manage Employees</h4>
                        <p>Employee management (future feature).</p>
                        <button class="btn btn-secondary" disabled>Coming Soon</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h4>Finances</h4>
                        <p>Track fees and expenses (future feature).</p>
                        <button class="btn btn-secondary" disabled>Coming Soon</button>
                    </div>
                </div>
            </div>

        </div>
    </main>

    
    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">&copy; 2025 Library Management System</p>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
