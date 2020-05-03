@extends('user.layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">List</div>

                <div class="card-body">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Code</th>
                                <th scope="col">Year</th>
                                <th scope="col">Degree</th>
                                <th scope="col">Name</th>
                                <th scope="col">File</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($qps as $key => $qp)
                            <tr>
                                <th scope="row">
                                    {{ $key+ 1 + ($qps->perPage() * ($qps->currentPage() - 1)) }}
                                </th>
                                <td>
                                    {{ $qp->code }}
                                </td>
                                <td>
                                    {{ $qp->year }}
                                </td>
                                <td>
                                    {{ $qp->degree }}
                                </td>
                                <td>
                                    {{ $qp->name }}
                                </td>
                                <td>
                                    <a href="{{url($qp->path)}}">View</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5">No data</td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                    {{$qps->appends(request()->query())->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection