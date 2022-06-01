@extends('user.template.main')

@section('meta_token')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    {{-- <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet"> --}}
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet'
        type='text/css' />
@endsection
@section('route')
    <h6 class="h2 text-white d-inline-block mb-0">Contents</h6>
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="/user/home"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="/user/contentKind/content_kind_list">Content Kinds</a></li>
            <li class="breadcrumb-item"><a
                    href="/user/contentKind/{{ $data }}/{{ $id }}">{{ $data }}</a></li>
        </ol>
    </nav>
@endsection

{{-- @section('container')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>Content Kind / {{ $data }}</h1>
                <button class="btn btn-primary" onClick="create('{{ $data }}','{{ $id }}')">+ Add
                    Content</button>
                <div id="read" class="mt-3"></div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
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
@endsection --}}

@section('container')
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card bg-default shadow">
                    <div class="col-lg-12">
                        <div class="row mt-4">
                            <div class="col">
                                <h1 class="text-white mt-2 d-inline">Content</h1>
                                <button class="ml-4 align-items-center btn btn-primary d-inline"
                                    onClick="create('{{ $data }}','{{ $id }}')">+ Add
                                    Content</button>
                                <hr class="my-3">
                                <div id="read" class="mt-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div id="page" class="p-2"></div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            read()
        });
        // Read Database
        function read() {
            var id = {{ $id }};
            // debugger;
            $.get("{{ url('/user/contentKind/read/{data}') }}/" + id, {}, function(data, status) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $("#read").html(data);
            });
        }

        function create(contentKind, id) {
            $.get("{{ url('/user/contentKind/create') }}/" + contentKind + "/" + id, {}, function(data, status) {
                $("#exampleModalLabel").html('Add User')
                $("#page").html(data);
                $("#exampleModal").modal('show');
                // var editor = new FroalaEditor('textarea');
                // var toolbarOptions = [
                //     ['bold', 'italic', 'underline', 'strike'], // toggled buttons
                //     ['blockquote', 'code-block', 'image'],

                //     [{
                //         'header': 1
                //     }, {
                //         'header': 2
                //     }], // custom button values
                //     [{
                //         'list': 'ordered'
                //     }, {
                //         'list': 'bullet'
                //     }],
                //     [{
                //         'script': 'sub'
                //     }, {
                //         'script': 'super'
                //     }], // superscript/subscript
                //     [{
                //         'indent': '-1'
                //     }, {
                //         'indent': '+1'
                //     }], // outdent/indent
                //     [{
                //         'direction': 'rtl'
                //     }], // text direction

                //     ['clean'] // remove formatting button
                // ];

                // var quill = new Quill('#editor', {
                //     modules: {
                //         toolbar: toolbarOptions
                //     },
                //     theme: 'snow'
                // });
            });
        }

        function show(contentKind, id) {
            $.get("{{ url('/user/contentKind/show') }}/" + contentKind + "/" + id, {}, function(data, status) {
                $("#exampleModalLabel").html('Edit Content Kind')
                $("#page").html(data);
                $("#exampleModal").modal('show');
            });
        }

        function destroy(contentKind_id, id) {
            // debugger;
            var result = confirm("Want to delete?");
            if (result) {
                $.ajax({
                    type: "get",
                    url: "{{ url('/user/contentKind/destroy') }}/" + contentKind_id + "/" + id,
                    success: function(data) {
                        $(".btn-close").click();
                        read();
                        Command: toastr["error"]("Content Success Deleted !", "Delete Content")

                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                    }
                });
            }

        }
    </script>
@endsection
