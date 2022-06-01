<form action="javascript:void(0)" method="post" enctype="multipart/form-data">
    @csrf
<div>
<div class="row-md-6">
    <div class="col-md-12">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required autofocus>
    </div>

    <div class="col-md-12">
        <label for="inputName" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="col-md-12">
        <label for="inputPassword4" class="form-label">Password</label>
        <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
    </div>
</div>
<div class="row-md-6" style="margin-top: 2rem;">
    <h5>Select Role</h5>
    @foreach ($data as $item)
    <div class="form-check">
        <input class="form-check-input" type="radio" name="role" id="role" value="{{ $item->name }}">
        <label class="form-check-label" for="role">
            {{ $item->name }}
        </label>
    </div>
    @endforeach
</div>
</div>

    
<div>
    <div class="form-group mt-2 text-right">
        <button class="btn btn-success" onClick="store()">Save</button>
    </div>
</div>
   
</form>