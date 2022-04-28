<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>

@if(session('update')!=null)
    <h1>{{ session('update') }}</h1>
@endif

<table id="example" class="display" style="width:100%">
    <thead>
    <tr>
        <th>Serial</th>
        {{--        <th>ID</th>--}}
        <th>Title</th>
        <th>Image</th>
        <th>Created At</th>
        <th>Updated at</th>
        <th>Update</th>
        <th>Delete</th>

    </thead>

    <tbody>
    <?php $id = 1;?>
    @foreach ($books as $d)
        <tr>
            <td>{{ $id++ }}</td>
            {{--            <td>{{ $d -> id}}</td>--}}
            <td>{{ $d -> title}}</td>
            <td><img src="{{ asset('storage/'.$d->image) }}" alt="" width="100px"></td>
            <td>{{ $d -> created_at -> format('d/m/y') }}</td>
            <td>{{ $d -> updated_at -> format('d/m/y') }}</td>
            <td><a href='{{ route('book.edit', $d->id) }}'>Update</a></td>

            <td>
            <form action="{{ route('book.delete', $d->id ) }}" method="post">
                {{ csrf_field() }}
                @method('delete')
                <input type="submit" value="Delete">
            </form>
            </td>
        </tr>

    @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {{ $books->links() }}
</div>
{{--<script src="https://code.jquery.com/jquery-3.5.1.js"></script>--}}
{{--<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>--}}
{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        $('#example').DataTable();--}}
{{--    });--}}
{{--</script>--}}
</body>
</html>
