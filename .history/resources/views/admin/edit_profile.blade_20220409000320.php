@extends('admin.template.main')


@section('container')

<form class="row g-3 mt-2">
    @csrf
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail" value="{{ auth()->user()->email }}" name="email" required autofocus>
    </div>

    <div class="col-md-6">
        <label for="inputName" class="form-label">Name</label>
        <input type="text" class="form-control" id="inputName" value="{{ auth()->user()->name }}" name="name" required>
    </div>

    <!-- <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
                </div>

                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Confirm Password</label>
                    <input id="password_confirm" class="form-control" type="password" name="password_confirm">
                </div> -->


    <div class="col-12">
        <button type="submit" class="btn btn-primary" onclick="update('{{ auth()->user()->id }}')"> Update</button>
    </div>
</form>

@endsection
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
    function read() {
        $.get("{{ url('/admin/edit_profile/') }}");
    }

    function update(id) {
        var email = $("#inputEmail").val();
        var name = $("#inputName").val();
        $.ajax({
            type: "get",
            url: "{{ url('/admin/edit_profile/update') }}/" + id,
            data: "name=" + name,
            success: read(),
            /* error: function(xhr, status, error) {
                alert("Error!" + xhr.status);
            }, */

        });


    }
</script>