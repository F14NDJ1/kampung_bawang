<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail" value="{{ auth()->user()->email }}" name="email" required autofocus>
    </div>

    <div class="col-md-6">
        <label for="inputName" class="form-label">Name</label>
        <input type="text" class="form-control" id="inputName" value="{{ auth()->user()->name }}" name="name" required>
    </div>

    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
    </div>

    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Confirm Password</label>
        <input id="password_confirm" class="form-control" type="password" name="password_confirm">
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-label for="password" :value="__('Password')" />

        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
    </div>


</form>