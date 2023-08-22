<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Welcome {{ user()->name }}!</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Teacher</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Total Subjects</h6>
                                <h3>{{ count(allSubjects()) }}</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/teacher-icon-01.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (isAssigned())
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card flex-fill fb sm-box">
                        <div class="social-likes">
                            <p>Like us on facebook</p>
                            <h6>50,095</h6>
                        </div>
                        <div class="social-boxs">
                            <img src="assets/img/icons/student-icon-01.svg" alt="Social Icon">
                        </div>
                    </div>
                </div>
            @else
                <a class="col-xl-3 col-sm-6 col-12" href="{{ route('apply') }}">
                    <div class="card flex-fill fb sm-box">
                        <div class="social-likes">
                            <p>Apply for Posting</p>
                            <h6>Now</h6>
                        </div>
                        <div class="social-boxs">
                            <img src="assets/img/icons/student-icon-01.svg" alt="Social Icon">
                        </div>
                    </div>
                </a>
            @endif
        </div>


        <div class="row">
            <div class="col-12 col-lg-12 col-xl-8">
                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-12 d-flex">
                        <div class="card flex-fill comman-shadow">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="card-title">Schools</h5>
                                    </div>
                                    <div class="col-6">
                                        <span class="float-end view-link"><a href="#">View All
                                                Schools</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3 pb-3">
                                <div class="table-responsive lesson">
                                    <table class="table table-center">
                                        <tbody>
                                            @foreach (allSchools() as $item)
                                                <tr>
                                                    <td>
                                                        <div class="date">
                                                            <b>{{ $item->name }}</b>
                                                            <p>{{ $item->address }}</p>
                                                            <ul class="teacher-date-list">
                                                                <li><i
                                                                        class="fas fa-map-pin me-2"></i>{{ $item->city }}
                                                                </li>
                                                                <li>|</li>
                                                                <li><i
                                                                        class="fas fa-map-pin me-2"></i>{{ $item->state }}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('class.index', $item) }}"
                                                            class="btn btn-info">View
                                                            Classes</a>
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
                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-12 d-flex">
                        <div class="card flex-fill comman-shadow">
                            <div class="card-header d-flex align-items-center">
                                <h5 class="card-title">Subjects</h5>
                                <ul class="chart-list-out student-ellips">
                                    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="teaching-card">

                                    <ul class="activity-feed">

                                        @foreach (allSubjects() as $item)
                                            <li class="feed-item d-flex align-items-center">
                                                <div class="dolor-activity">
                                                    <span class="feed-text1"><a>{{ $item->name }}</a></span>

                                                </div>
                                                <div class="activity-btns ms-auto">
                                                    <button type="submit" class="btn btn-info">Edit</button>
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-12 col-xl-4 d-flex">
                <div class="card flex-fill comman-shadow">
                    <div class="card-body">
                        <div id="calendar-doctor" class="calendar-container"></div>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
