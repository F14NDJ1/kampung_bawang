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
            <button class="btn btn-warning" onClick="/admin/show('{{ $item->id }}')">Edit</button>
            <button class="btn btn-danger" onClick="destroy('{{ $item->id }}')">Delete</button>
        </td>
    </tr>
    @endforeach
</table>