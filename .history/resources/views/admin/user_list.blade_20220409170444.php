@extends('admin.template.main')


@section('container')

<table class="table">
    <tr>
        <th>Email</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    @foreach ($data as $item)
    <tr>
        <td>{{ $item->email }}</td>
        <td>{{ $item->name }}</td>
        <td>
            <button class="btn btn-warning" onClick="show('{{ $item->id }}')">Edit</button>
            <button class="btn btn-danger" onClick="destroy('{{ $item->id }}')">Delete</button>
        </td>
    </tr>
    @endforeach
</table>
<div id="read" class="mt-3"></div>

@endsection

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
    $(document).ready(function() {
        read()
    });
    // Read Database
    function read() {
        $.get("{{ url('/admin/user_list') }}", {}, function(data, status) {
            $("#read").html(data);
        });
    }
</script>