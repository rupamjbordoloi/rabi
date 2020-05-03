@extends('admin.layout.app')

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Customer List</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{route('admin.question-paper.create')}}"
                            class="btn btn-sm btn-primary">{{ __('Add New') }}</a>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">code</th>
                            <th scope="col">year</th>
                            <th scope="col">degree</th>
                            <th scope="col">name</th>
                            <th scope="col">file</th>
                            <th scope="col">status</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($q_papers as $key => $q_paper)
                        <tr>
                            <td>
                                {{ $key+ 1 + ($q_papers->perPage() * ($q_papers->currentPage() - 1)) }}
                            </td>
                            <td>
                                {{ $q_paper->code }}
                            </td>
                            <td>
                                {{ $q_paper->year }}
                            </td>
                            <td>
                                {{ $q_paper->degree }}
                            </td>
                            <td>
                                {{ $q_paper->name }}
                            </td>
                            <td>
                                <a href="{{url($q_paper->path)}}">View</a>
                            </td>
                            <td>
                                {{ $q_paper->status_show }}
                            </td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a href="{{route('admin.question-paper.show',$q_paper)}}" class="dropdown-item">
                                            View
                                        </a>
                                        <a href="{{route('admin.question-paper.edit',$q_paper)}}" class="dropdown-item">
                                            Edit
                                        </a>
                                        <a href="{{route('admin.question-paper.delete',$q_paper)}}" class="dropdown-item">
                                            Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">No data</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer py-4">
                <nav class="d-flex justify-content-end" aria-label="...">
                    {{$q_papers->appends(request()->query())->render()}}
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection