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
        <button type="submit" class="btn btn-primary" onclick="update('{{ auth()->user()->name }}')"> Update</button>
    </div>
</form>

@endsection

<script>
    $(document).ready(function() {
        read()
    });

    function read() {
        $.get("{{ url('read') }}", {}, function(data, status) {
            $("#read").html(data);
        });
    }

    function update(id) {
        var name = $("#email").val();
        var name = $("#name").val();

        $.ajax({
            type: "get",
            url: "{{ url('update') }}/" + id,
            data: "name=" + name,
            success: function(data) {
                $(".btn-close").click();
                read()
            }
        });
    }
</script>