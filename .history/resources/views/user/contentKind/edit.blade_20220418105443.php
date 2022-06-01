<form action="javascript:void(0)" method="post" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6">
        <label for="contentKind" class="form-label">Content Kind</label>
        <input type="text" class="form-control" id="name_content_kind" name="name_content_kind" required autofocus value="{{$data->name_content_kind}}">
    </div>

    <div class="col-md-6">
        <label for="inputName" class="form-label">Detail</label>
        <input type="text" class="form-control" id="detail_content_kind" name="detail_content_kind" required value="{{$data->detail_content_kind}}">
    </div>

    <div class="form-group mt-2">
        <button class="btn btn-success" onClick="update()">Add</button>
    </div>
</form>