@extends('admin.layout.app')

@section('content')
<div class="header-body">
    <!-- Card stats -->
    <div class="row">
        <div class="col-xl-3 pb-5">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Active Question Paper</h5>
                        <span class="h2 font-weight-bold mb-0">{{$active_qp}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-green text-white rounded-circle shadow">
                                <i class="fas fa-file"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 pb-5">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">InActive Question Paper</h5>
                        <span class="h2 font-weight-bold mb-0">{{$inactive_qp}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                <i class="fas fa-file"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection