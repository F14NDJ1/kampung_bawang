<table class="table">
    <tr>
        <th>Name Content</th>
        <th>Content</th>

    </tr>
    @foreach ($data as $item)
    <tr>
        <td> <a href="{{ $item->name_content_kind }}">{{ $item->name_content_kind }}</a></td>
        <td>{{ $item->detail_content_kind }}</td>
        <td>
            <button class="btn btn-warning" onClick="show('{{ $item->id }}')">Edit</button>
            <button class="btn btn-danger" onClick="destroy('{{ $item->id }}')">Delete</button>
        </td>
    </tr>
    @endforeach
</table>