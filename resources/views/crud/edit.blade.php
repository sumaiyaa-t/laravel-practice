<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container mt-4">
    <h3>Update Form</h3>
    <hr>
    <form action="{{ route('book.update', $books->id )}}" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
        @method('put')

        <div class="form-group">
            <input type="text" name="title" placeholder="Enter Title" class="form-control" value={{ $books->title }}}>
        </div>


        <div class="form-group">
            <input type="file" name="image" class="form-control" >
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-outline-success">Update</button>
        </div>

    </form>
</div>
</body>
</html>
