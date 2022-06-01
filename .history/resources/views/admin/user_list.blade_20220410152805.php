@extends('admin.template.main')


@section('container')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <h1>USER LIST</h1>
            <button class="btn btn-primary" onClick="create()">+ Add User</button>
            <div id="read" class="mt-3"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="page" class="p-2"></div>
            </div>
        </div>
    </div>
</div>


@endsection

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
    $(document).ready(function() {
        read()
    });
    // Read Database
    function read() {
        $.get("{{ url('/admin/read') }}", {}, function(data, status) {
            $("#read").html(data);
        });
    }

    function create() {
        $.get("{{ url('/admin/create') }}", {}, function(data, status) {
            $("#exampleModalLabel").html('Add User')
            $("#page").html(data);
            $("#exampleModal").modal('show');
        });
    }

    function store() {
        var name = $("#name").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var role = $("#role").val();
        $.ajax({
            type: "get",
            url: "{{ url('/admin/store') }}",
            data: {
                "name": name,
                "email": email,
                "password": password,
                "role": role
            },
            success: function(data) {
                $(".btn-close").click();
                read()
            }
        });
    }

    function show(id) {
        $.get("{{ url('/admin/show') }}/" + id, {}, function(data, status) {
            $("#exampleModalLabel").html('Edit User')
            $("#page").html(data);
            $("#exampleModal").modal('show');
        });
    }

    function update(id) {
        var email = $("#email").val();
        var name = $("#name").val();
        var role = $("#role").val();
        debugger;
        $.ajax({
            type: "get",
            url: "{{ url('/admin/update') }}/" + id,
            data: {
                "name": name,
                "email": email,
                //"password": password,
                "role": role
            },
            success: function(data) {
                $(".btn-close").click();
                read()
            },
            error: function(xhr, status, error) {
                alert("Error!" + xhr.status);
            },
        });
    }
</script>