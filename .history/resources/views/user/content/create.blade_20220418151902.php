<form action="javascript:void(0)" method="post" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6">
        <label for="content" class="form-label">Content Kind</label>
        <input type="text" class="form-control" id="name_content" name="name_content" required autofocus>
    </div>

    <div class="col-md-6">
        <label for="inputName" class="form-label">Detail</label>
        <input type="text" class="form-control" id="detail_content_kind" name="detail_content_kind" required>
    </div>

    <div class="form-group mt-2">
        <button class="btn btn-success" onClick="store()">Add</button>
    </div>
</form>