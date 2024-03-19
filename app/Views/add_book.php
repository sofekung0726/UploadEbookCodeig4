<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Book</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">eBookstore</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= site_url('/') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('/books/list') ?>">List Books</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-5">
    <h2>Add a New Book</h2>
    <form action="<?= site_url('books/add') ?>" method="post" enctype="multipart/form-data" class="mt-4">
        <div class="form-group">
            <label>Title:</label>
            <input type="text" name="title" required class="form-control">
        </div>
        <div class="form-group">
            <label>Category:</label>
            <select name="category" required class="form-control">
                <option value="Hardware">Hardware</option>
                <option value="Software">Software</option>
                <!-- Add more options here -->
            </select>
        </div>
        <div class="form-group">
            <label>ISBN:</label>
            <input type="text" name="isbn" required class="form-control">
        </div>
        <div class="form-group">
            <label>Author:</label>
            <input type="text" name="author" required class="form-control">
        </div>
        <div class="form-group">
            <label>Cover Image:</label>
            <input type="file" name="cover_image" required class="form-control">
        </div>
        <div class="form-group">
            <label>Cover Image:</label>
            <input type="file" name="book_file" required class="form-control">
        </div>    
        <button type="submit" class="btn btn-primary">Add Book</button>
    </form>
</div>

<footer class="bg-light text-center text-lg-start fixed-bottom">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); width: 100%;">
        © 2024 eBookstore: All rights reserved.
    </div>
</footer>
</body>
</html>
