<form action="javascript:void(0)" method="post" enctype="multipart/form-data">
    @csrf<div class="col-md-12">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required autofocus value="{{$data->email}}">
    </div>

    <div class="col-md-12">
        <label for="inputName" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required value="{{$data->name}}">
    </div>

    <input type="text" class="form-control" id="role2" name="role2" value="{{$role}}" hidden>
    <!-- <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
    </div> -->

<div class="row-md-6" style="margin-top: 2rem;">
    <h5>Select Role</h5>
    @foreach ($data_role as $item)

    @if( $item->name == $role )
    <div class="form-check">
        <input class="form-check-input" type="radio" name="role" id="role" value="{{ $item->id }}" checked>
        <label class="form-check-label" for="role">
            {{ $item->name }}
        </label>
    </div>
    @else
    <div class="form-check">
        <input class="form-check-input" type="radio" name="role" id="role" value="{{ $item->id }}">
        <label class="form-check-label" for="role">
            {{ $item->name }}
        </label>
    </div>
    @endif
    @endforeach
</div>
    <div class="form-group mt-2 text-right">
        <button class="btn btn-success" onClick="update('{{$data->id}}')">Save</button>
    </div>
</form>