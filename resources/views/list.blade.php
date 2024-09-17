<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Library</h2>
        <div class="mb-3">
            <a href="{{ route('books.create') }}" class="btn btn-primary">Add New Book</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Page Count</th>
                    <th>Author Name</th>
                    <th>Author Email</th>
                    <th>Published Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->Title }}</td>
                        <td>{{ $book->description }}</td>
                        <td>{{ $book->Page_Count }}</td>
                        <td>{{ $book->Author_Name }}</td>
                        <td>{{ $book->Author_Email }}</td>
                        <td>{{ $book->Published_Date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
