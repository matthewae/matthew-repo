<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Book</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Add New Book</h2>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Title">Title</label>
                <input type="text" class="form-control" id="Title" name="Title" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="Page_Count">Page Count</label>
                <input type="number" class="form-control" id="Page_Count" name="Page_Count" required>
            </div>
            <div class="form-group">
                <label for="Author_Name">Author Name</label>
                <input type="text" class="form-control" id="Author_Name" name="Author_Name" required>
            </div>
            <div class="form-group">
                <label for="Author_Email">Author Email</label>
                <input type="email" class="form-control" id="Author_Email" name="Author_Email" required>
            </div>
            <div class="form-group">
                <label for="Published_Date">Published Date</label>
                <input type="date" class="form-control" id="Published_Date" name="Published_Date" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Book</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Back to List</a>
        </form>
    </div>
</body>
</html>
