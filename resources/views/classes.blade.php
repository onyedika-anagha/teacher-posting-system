@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="/assets/plugins/datatables/datatables.min.css">
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Classes</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Classes</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">

                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="page-title">{{ $school->name }}</h3>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                        @if (isAdmin())
                                            <a href="{{ route('class.create', $school) }}" class="btn btn-primary"><i
                                                    class="fas fa-plus"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table
                                    class="table border-0 star-student table-hover table-center mb-0 datatables table-striped">
                                    <thead class="student-thread">
                                        <tr>
                                            <th>
                                                <div class="form-check check-tables">
                                                    <input class="form-check-input" type="checkbox" value="something">
                                                </div>
                                            </th>
                                            <th>Code</th>
                                            <th>Name</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($classes as $item)
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox" value="something">
                                                    </div>
                                                </td>
                                                <td>
                                                    {{ $item->code }}
                                                </td>
                                                <td>
                                                    <h2>
                                                        <a>{{ $item->name }}</a>
                                                    </h2>
                                                </td>
                                                <td class="text-end">
                                                    <div class="actions">
                                                        {{-- <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
                                                            <i class="feather-eye"></i>
                                                        </a> --}}
                                                        <a href="{{ route('class.edit', [
                                                            'id' => $school->id,
                                                            'class' => $item->id,
                                                        ]) }}"
                                                            class="btn btn-sm bg-danger-light">
                                                            <i class="feather-edit"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
@section('scripts')
    <script src="/assets/plugins/datatables/datatables.min.js"></script>
@endsection
