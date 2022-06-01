<table class="table">
    <tr>
        <th>Content Kind</th>
        <th>Detail</th>

    </tr>
    @foreach ($data as $item)
    <tr>
        <td>{{ $item->nama_content_kind }}</td>
        <td>{{ $item->detail_content_kind }}</td>

    </tr>
    @endforeach
</table>