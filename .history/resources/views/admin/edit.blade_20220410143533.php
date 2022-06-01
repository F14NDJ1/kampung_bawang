<form class="row g-3 needs-validation">

    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required autofocus value="{{$data->email}}">
    </div>

    <div class="col-md-6">
        <label for="inputName" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required value="{{$data->name}}">
    </div>

    <input type="text" class="form-control" id="role2" name="role2" required value="{{$data->role}}">
    <!-- <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
    </div> -->


    <h5>Select Role</h5>
    @foreach ($data_role as $item)
    <div class="form-check">
        <input class="form-check-input" type="radio" name="role" id="role" value="{{ $item->name }}">
        <label class="form-check-label" for="role">
            {{ $item->name }}
        </label>
    </div>
    @endforeach

    <div class="form-group mt-2">
        <button class="btn btn-success" onClick="store()">Add</button>
    </div>
</form>