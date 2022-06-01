@extends('admin.template.main')


@section('container')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <h1>TUTORIAL CRUD DENGAN JQUERY AJAX </h1>
            <button class="btn btn-primary" onClick="create()">+ Tambah Product</button>
            <div id="read" class="mt-3"></div>
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
</script>