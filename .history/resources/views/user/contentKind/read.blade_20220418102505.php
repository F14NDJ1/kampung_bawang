<table class="table">
    <tr>
        <th>Content Kind</th>
        <th>Detail</th>

    </tr>
    @foreach ($data as $item)
    <tr>
        <td> <a href="">{{ $item->name_content_kind }}</a></td>
        <td>{{ $item->detail_content_kind }}</td>

    </tr>
    @endforeach
</table>