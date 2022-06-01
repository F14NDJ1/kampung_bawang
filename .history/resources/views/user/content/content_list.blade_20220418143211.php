@extends('user.template.main')

@section('meta_token')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('container')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <h1>Content Kind {{$data}}</h1>
            <button class="btn btn-primary" onClick="create()">+ Add Content</button>
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
        $.get("{{ url('/user/contentKind/{$data}') }}", {}, function(data, status) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $("#read").html(data);
        });
    }

    function create() {
        $.get("{{ url('/user/contentKind/create') }}", {}, function(data, status) {
            $("#exampleModalLabel").html('Add User')
            $("#page").html(data);
            $("#exampleModal").modal('show');
        });
    }

    function store() {
        var name_content_kind = $("#name_content_kind").val();
        var detail_content_kind = $("#detail_content_kind").val();
        debugger;
        $.ajax({
            type: "post",
            url: "{{ url('/user/contentKind/store') }}",
            data: {
                "name_content_kind": name_content_kind,
                "detail_content_kind": detail_content_kind,
            },
            success: function(data) {
                $(".btn-close").click();
                read()
            },
            /* error: function(xhr, status, error) {
                alert("Error!" + xhr.status + " " + error);
            }, */
        });
    }

    function show(id) {
        $.get("{{ url('/user/contentKind/show') }}/" + id, {}, function(data, status) {
            $("#exampleModalLabel").html('Edit Content Kind')
            $("#page").html(data);
            $("#exampleModal").modal('show');
        });
    }

    function update(id) {
        var name_content_kind = $("#name_content_kind").val();
        var detail_content_kind = $("#detail_content_kind").val();
        debugger;
        $.ajax({
            type: "post",
            url: "{{ url('/user/contentKind/update') }}/" + id,
            data: {
                "name_content_kind": name_content_kind,
                "detail_content_kind": detail_content_kind,
            },
            success: function(data) {
                $(".btn-close").click();
                read()
            },
            error: function(xhr, status, error) {
                alert("Error!" + xhr.status + error);
            },
        });
    }

    function destroy(id) {
        $.ajax({
            type: "get",
            url: "{{ url('/user/contentKind/destroy') }}/" + id,
            success: function(data) {
                $(".btn-close").click();
                read()
            }
        });
    }
</script>