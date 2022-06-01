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
            @if($item->id == auth()->user()->id)
            <button class="btn btn-warning" disabled>Edit</button>
            <button class="btn btn-danger" disabled>Delete</button>
            @else
            <button class="btn btn-warning" onClick="show('{{ $item->id }}')">Edit</button>
            <button class="btn btn-danger" onClick="return destroy('{{ $item->id }}')">Delete</button>
            @endif
        </td>
    </tr>
    @endforeach
</table>