@extends('admin.layout.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Edit Question Paper</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{route('admin.question-paper.index')}}"
                            class="btn btn-sm btn-primary">{{ __('List') }}</a>
                    </div>
                </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
                <form role="form" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label>Code</label>
                        <input class="form-control" placeholder="{{ __('Code') }}" type="text" name="code"
                            value="{{ old('code',$qp->code) }}" required autofocus>
                    </div>
                    <div class="form-group mb-3">
                        <label>Name</label>
                        <input class="form-control" placeholder="{{ __('Name') }}" type="text" name="name"
                            value="{{ old('name',$qp->name) }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Year</label>
                        <input class="form-control" placeholder="{{ __('Year') }}" type="text" name="year"
                            value="{{ old('year',$qp->year) }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Degree</label>
                        <input class="form-control" placeholder="{{ __('Degree') }}" type="text" name="degree"
                            value="{{ old('degree',$qp->degree) }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>File</label>
                        <input class="form-control" type="file" name="file" value="{{ old('file') }}">
                        <a href="{{url($qp->path)}}">View</a>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary my-4">{{ __('Update') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection