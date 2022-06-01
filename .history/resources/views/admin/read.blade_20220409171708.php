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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="page" class="p-2"></div>
            </div>
        </div>
    </div>
</div>