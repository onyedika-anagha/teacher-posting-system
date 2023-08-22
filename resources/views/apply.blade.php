@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="/assets/plugins/twitter-bootstrap-wizard/form-wizard.css">
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Apply</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Components</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Details</h4>
                        </div>
                        <div class="card-body">
                            <div id="basic-pills-wizard" class="twitter-bs-wizard">
                                <ul class="twitter-bs-wizard-nav">
                                    <li class="nav-item">
                                        <a href="#seller-details" class="nav-link" data-toggle="tab">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Seller Details">
                                                <i class="far fa-user"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#company-document" class="nav-link" data-toggle="tab">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Company Document">
                                                <i class="fas fa-map-pin"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#bank-detail" class="nav-link" data-toggle="tab">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Bank Details">
                                                <i class="fa-th-list"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content twitter-bs-wizard-tab-content">
                                    <div class="tab-pane" id="seller-details">
                                        <div class="mb-4">
                                            <h5>Enter Your Personal Details</h5>
                                        </div>
                                        <form id="userUpdate">
                                            <input type="hidden" name="id" value="{{ user()->id }}">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-firstname-input" class="form-label">
                                                            Name</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-firstname-input" name="name"
                                                            value="{{ user()->name }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-lastname-input"
                                                            class="form-label">Gender</label>
                                                        <select name="gender" class="form-control" required>
                                                            <option value="">-- Select Option --</option>
                                                            <option value="male"
                                                                @if (user()->gender == 'male') selected @endif>Male
                                                            </option>
                                                            <option
                                                                value="female"@if (user()->gender == 'female') selected @endif>
                                                                Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-phoneno-input"
                                                            class="form-label">Phone</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-phoneno-input" name="tel"
                                                            value="{{ user()->tel }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-email-input" class="form-label">Email</label>
                                                        <input type="email" class="form-control"
                                                            id="basicpill-email-input" name="email"
                                                            value="{{ user()->email }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="next"><button type="submit" class="btn btn-primary"
                                                        onclick="nextTab()">Next <i
                                                            class="bx bx-chevron-right ms-1"></i></button>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>

                                    <div class="tab-pane" id="company-document">
                                        <div>
                                            <div class="mb-4">
                                                <h5>Enter Your Address</h5>
                                            </div>
                                            <form id="userUpdate2">
                                                <input type="hidden" name="id" value="{{ user()->id }}">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-pancard-input"
                                                                class="form-label">Address
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                id="basicpill-pancard-input" name="address"
                                                                value="{{ user()->address }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-vatno-input"
                                                                class="form-label">L.G.A</label>
                                                            <input type="text" class="form-control"
                                                                id="basicpill-vatno-input" name="lga"
                                                                value="{{ user()->lga }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-cstno-input"
                                                                class="form-label">City</label>
                                                            <input type="text" class="form-control"
                                                                id="basicpill-cstno-input" name="city"
                                                                value="{{ user()->city }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-servicetax-input"
                                                                class="form-label">State</label>
                                                            <input type="text" class="form-control"
                                                                id="basicpill-servicetax-input" name="state"
                                                                value="{{ user()->state }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                    <li class="previous"><a href="javascript: void(0);"
                                                            class="btn btn-primary" onclick="nextTab()"><i
                                                                class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                    <li class="next"><button type="submit"
                                                            class="btn btn-primary ms-2" onclick="nextTab()">Next <i
                                                                class="bx bx-chevron-right ms-1"></i></button></li>
                                                </ul>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="bank-detail">
                                        <div>
                                            <div class="mb-4">
                                                <h5>Choose SUBJECTS you specialize on.</h5>
                                            </div>
                                            <form method="POST" action="{{ route('assigned-teacher.store') }}">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{ user()->id }}">
                                                <div class="row">
                                                    @foreach (allSubjects() as $item)
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="subjects[]"
                                                                    value="{{ $item->id }}"> {{ $item->name }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                    <li class="previous"><a href="javascript: void(0);"
                                                            class="btn btn-primary" onclick="nextTab()"><i
                                                                class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                    <li class="float-end"><a href="javascript: void(0);"
                                                            class="btn btn-primary ms-2" data-bs-toggle="modal"
                                                            data-bs-target=".confirmModal">Save
                                                            Changes</a></li>
                                                </ul>
                                                <div class="modal fade confirmModal" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content p-3">
                                                            <div class="modal-header border-bottom-0">
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="text-center">
                                                                    <h5 class="mb-3">Confirm Save Changes</h5>
                                                                    <button type="button" class="btn btn-dark w-md"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary w-md"
                                                                        data-bs-dismiss="modal" onclick="nextTab()">Save
                                                                        changes</button>
                                                                </div>
                                                            </div>
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
                </div>


            </div>
        </div>


    </div>
@endsection
@section('scripts')
    <script src="/assets/plugins/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="/assets/plugins/twitter-bootstrap-wizard/prettify.js"></script>
    <script src="/assets/plugins/twitter-bootstrap-wizard/form-wizard.js"></script>
    <script src="/assets/js/apply.js"></script>
@endsection
