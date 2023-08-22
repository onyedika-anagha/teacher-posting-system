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
                        <h3 class="page-title">Edit School</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="Schools.html">School</a></li>
                            <li class="breadcrumb-item active">Edit School</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form
                                action="{{ route('class.update', [
                                    'class' => $class,
                                    'id' => $school,
                                ]) }}"
                                method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="PATCH">

                                <input type="hidden" name="school_id" value="{{ $school->id }}">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title"><span>{{ $school->name }}</span></h5>
                                    </div>
                                    <div class="col-12 col-sm-12">
                                        <div class="form-group local-forms">
                                            <label>Class Name <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ $class->name }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="student-submit">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('class-subjects.store') }}" method="POST">
                                @csrf

                                <input type="hidden" name="school_id" value="{{ $school->id }}">
                                <input type="hidden" name="school_class_id" value="{{ $class->id }}">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title"><span>{{ $school->name }} - {{ $class->name }}</span></h5>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-2">Subject</label>
                                            <div class="col-md-10">
                                                <select class="form-control form-select" name="subject_id" required>
                                                    <option>-- Select --</option>
                                                    @foreach (allSubjects() as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-2">Teachers</label>
                                            <div class="col-md-10">
                                                <input type="number" min="1" max="10" name="teachers"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="student-submit">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <hr>

                            <div class="table-responsive">
                                <table
                                    class="table border-0 star-student table-hover table-center mb-0 datatables table-striped">
                                    <thead class="student-thread">
                                        <tr>
                                            <th>School</th>
                                            <th>Class</th>
                                            <th>Subject</th>
                                            <th>Teachers[Capacity]</th>
                                            {{-- <th class="text-end">Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($subjects as $item)
                                            <tr>
                                                <td>
                                                    {{ $item->school->name }}
                                                </td>
                                                <td>
                                                    {{ $item->school_class->name }}
                                                </td>
                                                <td>
                                                    {{ $item->subject->name }}
                                                </td>
                                                <td>
                                                    {{ $item->teachers }}
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
