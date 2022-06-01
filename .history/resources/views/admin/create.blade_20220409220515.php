<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail" name="email" required autofocus>
    </div>

    <div class="col-md-6">
        <label for="inputName" class="form-label">Name</label>
        <input type="text" class="form-control" id="inputName" name="name" required>
    </div>

    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
    </div>

    <div class="col-md-6 mb-2">
        <label for="inputPassword4" class="form-label">Confirm Password</label>
        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required>
    </div>

    <h5>Select Role</h5>
    @foreach ($data as $item)
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