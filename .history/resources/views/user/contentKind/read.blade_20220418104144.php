<table class="table">
    <tr>
        <th>Content Kind</th>
        <th>Detail</th>

    </tr>
    @foreach ($data as $item)
    <tr>
        <td> <a href="">{{ $item->name_content_kind }}</a></td>
        <td>{{ $item->detail_content_kind }}</td>
        <td>
            @if($item->id == auth()->user()->id)
            <button class="btn btn-warning" disabled>Edit</button>
            <button class="btn btn-danger" disabled>Delete</button>
            @else
            <button class="btn btn-warning" onClick="show('{{ $item->id }}')">Edit</button>
            <button class="btn btn-danger" onClick="destroy('{{ $item->id }}')">Delete</button>
            @endif
        </td>
    </tr>
    @endforeach
</table>