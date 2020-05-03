@extends('admin.layout.app')

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Question Paper View</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{route('admin.question-paper.index')}}"
                            class="btn btn-sm btn-primary">{{ __('List') }}</a>
                        <a href="{{route('admin.question-paper.edit',$qp)}}"
                            class="btn btn-sm btn-warning">{{ __('Edit') }}</a>
                        <a href="{{route('admin.question-paper.delete',$qp)}}"
                            class="btn btn-sm btn-warning">{{ __('Delete') }}</a>
                        @if($qp->status==1)
                        <a href="{{route('admin.question-paper.deactivate',$qp)}}"
                            class="btn btn-sm btn-warning">{{ __('Deactivate') }}</a>
                        @else
                        <a href="{{route('admin.question-paper.activate',$qp)}}"
                            class="btn btn-sm btn-info">{{ __('Activate') }}</a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="card-body px-lg-5 py-lg-5">
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <tbody>
                            <tr>
                                <td>Code</td>
                                <td>{{$qp->code}}</td>
                            </tr>
                            <tr>
                                <td>Year</td>
                                <td>{{$qp->year}}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{$qp->name}}</td>
                            </tr>
                            <tr>
                                <td>File</td>
                                <td>
                                    <a href="{{url($qp->path)}}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>{{$qp->status_show}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection