@extends('user.template.main')
@section('route')
    <h6 class="h2 text-white d-inline-block mb-0">Dashboards</h6>
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="/user/home"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="/user/home">Dashboards</a></li>
        </ol>
    </nav>
@endsection

@section('card-body1')
    <div class="col-xl-6 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Content Kind</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $data }}</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                            <i class="ni ni-collection"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('card-body2')
    <div class="col-xl-6 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Content</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $data1 }}</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                            <i class="ni ni-single-copy-04"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('container')
@endsection
