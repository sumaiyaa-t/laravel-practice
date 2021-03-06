<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<table id="example" class="display" style="width:100%">
    <thead>
    <tr>
        <th>Serial</th>
{{--        <th>ID</th>--}}
        <th>Title</th>
        <th>Created At</th>
        <th>Updated at</th>
        <th>Action</th>

    </thead>

    <tbody>
    <?php $id=1;?>
    @foreach ($c as $d)
        <tr>
            <td>{{ $id++ }}</td>
{{--            <td>{{ $d -> id}}</td>--}}
            <td>{{ $d -> title}}</td>
            <td>{{ $d -> created_at -> format('d/m/y') }}</td>
            <td>{{ $d -> updated_at -> format('d/m/y') }}</td>

            <td><a href='{{ route('delete.data', $d->id) }}'>Delete</a></td>
        </tr>

    @endforeach
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
</body>
</html>
