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
                            <form action="{{ route('school.update', $school) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="PATCH">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title"><span>School Details</span></h5>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group local-forms">
                                            <label>School Name <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ $school->name }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group local-forms">
                                            <label>School Address <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="address"
                                                value="{{ $school->address }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group local-forms">
                                            <label>City <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="city" value="Nsukka"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group local-forms ">
                                            <label>State <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" name="state" value="Enugu"
                                                readonly>
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
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="/assets/plugins/datatables/datatables.min.js"></script>
@endsection
