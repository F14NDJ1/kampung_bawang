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


    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <x-button class="ml-4" onclick="store()">
            {{ __('Register') }}
        </x-button>
    </div>
</form>