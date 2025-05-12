@extends('app') @section('title', 'Home') @section('content')
<div class="row">
    <div class="col-lg-4 col-6">
        <!--begin::Small Box Widget 1-->
        <div class="small-box text-bg-primary">
            <div class="inner">
                <h3>150</h3>
                <p>Absensi Hari Ini</p>
            </div>
            <div class="small-box-icon">
                <i class="bi bi-person"></i>
            </div>
            <a
                href="#"
                class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
            >
                More info
                <i class="bi bi-link-45deg"></i>
            </a>
        </div>
        <!--end::Small Box Widget 1-->
    </div>
    <!--end::Col-->
    <div class="col-lg-4 col-6">
        <!--begin::Small Box Widget 2-->
        <div class="small-box text-bg-success">
            <div class="inner">
                <h3>53<sup class="fs-5">%</sup></h3>
                <p>Karyawan Hadir</p>
            </div>
            <div class="small-box-icon">
                <i class="bi bi-person-check"></i>
            </div>
            <a
                href="#"
                class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
            >
                More info
                <i class="bi bi-link-45deg"></i>
            </a>
        </div>
        <!--end::Small Box Widget 2-->
    </div>
    <div class="col-lg-4 col-6">
        <!--begin::Small Box Widget 2-->
        <div class="small-box text-bg-danger">
            <div class="inner">
                <h3>47<sup class="fs-5">%</sup></h3>
                <p>Karyawan Tidak Hadir</p>
            </div>
            <div class="small-box-icon">
                <i class="bi bi-person-dash"></i>
            </div>
            <a
                href="#"
                class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
            >
                More info
                <i class="bi bi-link-45deg"></i>
            </a>
        </div>
        <!--end::Small Box Widget 2-->
    </div>
    <!--end::Col-->
    <div class="col-lg-4 col-6">
        <!--begin::Small Box Widget 2-->
        <div class="small-box text-bg-warning">
            <div class="inner">
                <h3>47</h3>
                <p>Karyawan Telat</p>
            </div>
            <div class="small-box-icon">
                <i class="bi bi-person-exclamation"></i>
            </div>
            <a
                href="#"
                class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
            >
                More info
                <i class="bi bi-link-45deg"></i>
            </a>
        </div>
        <!--end::Small Box Widget 2-->
    </div>
    <!--end::Col-->
    <div class="col-lg-4 col-6">
        <!--begin::Small Box Widget 4-->
        <div class="small-box text-bg-danger">
            <div class="inner">
                <h3>65</h3>
                <p>Karyawan Jatuh Tempo</p>
            </div>
            <div class="small-box-icon">
                <i class="bi bi-calendar-minus"></i>
            </div>
            <a
                href="#"
                class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
            >
                More info
                <i class="bi bi-link-45deg"></i>
            </a>
        </div>
        <!--end::Small Box Widget 4-->
    </div>
    <!--end::Col-->
</div>
<!--end::Row-->

<!--begin::Row-->
<div class="row">
    <!-- Start col -->
    <div class="col-lg-7 connectedSortable">
        <div class="card mb-4">
            <div class="card-header">
                <h3 class="card-title">Sales Value</h3>
            </div>
            <div class="card-body">
                <div id="revenue-chart"></div>
            </div>
        </div>
        <!-- /.card -->
        <!-- DIRECT CHAT -->
        <div class="card direct-chat direct-chat-primary mb-4">
            <div class="card-header">
                <h3 class="card-title">Direct Chat</h3>
                <div class="card-tools">
                    <span title="3 New Messages" class="badge text-bg-primary">
                        3
                    </span>
                    <button
                        type="button"
                        class="btn btn-tool"
                        data-lte-toggle="card-collapse"
                    >
                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                    </button>
                    <button
                        type="button"
                        class="btn btn-tool"
                        title="Contacts"
                        data-lte-toggle="chat-pane"
                    >
                        <i class="bi bi-chat-text-fill"></i>
                    </button>
                    <button
                        type="button"
                        class="btn btn-tool"
                        data-lte-toggle="card-remove"
                    >
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                    <!-- Message. Default to the start -->
                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-start">
                                Alexander Pierce
                            </span>
                            <span class="direct-chat-timestamp float-end">
                                23 Jan 2:00 pm
                            </span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img
                            class="direct-chat-img"
                            src="{{ asset('assets/img/user1-128x128.jpg') }}"
                            alt="message user"
                        />
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                            Is this template really for free? That's
                            unbelievable!
                        </div>
                        <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->
                    <!-- Message to the end -->
                    <div class="direct-chat-msg end">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-end">
                                Sarah Bullock
                            </span>
                            <span class="direct-chat-timestamp float-start">
                                23 Jan 2:05 pm
                            </span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img
                            class="direct-chat-img"
                            src="{{ asset('assets/img/user3-128x128.jpg') }}"
                            alt="message user"
                        />
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                            You better believe it!
                        </div>
                        <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->
                    <!-- Message. Default to the start -->
                    <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-start">
                                Alexander Pierce
                            </span>
                            <span class="direct-chat-timestamp float-end">
                                23 Jan 5:37 pm
                            </span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img
                            class="direct-chat-img"
                            src="{{ asset('assets/img/user1-128x128.jpg') }}"
                            alt="message user"
                        />
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                            Working with AdminLTE on a great new app! Wanna
                            join?
                        </div>
                        <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->
                    <!-- Message to the end -->
                    <div class="direct-chat-msg end">
                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-end">
                                Sarah Bullock
                            </span>
                            <span class="direct-chat-timestamp float-start">
                                23 Jan 6:10 pm
                            </span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img
                            class="direct-chat-img"
                            src="{{ asset('assets/img/user3-128x128.jpg') }}"
                            alt="message user"
                        />
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">I would love to.</div>
                        <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->
                </div>
                <!-- /.direct-chat-messages-->
                <!-- Contacts are loaded here -->
                <div class="direct-chat-contacts">
                    <ul class="contacts-list">
                        <li>
                            <a href="#">
                                <img
                                    class="contacts-list-img"
                                    src="{{
                                        asset('assets/img/user1-128x128.jpg')
                                    }}"
                                    alt="User Avatar"
                                />
                                <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        Count Dracula
                                        <small
                                            class="contacts-list-date float-end"
                                        >
                                            2/28/2023
                                        </small>
                                    </span>
                                    <span class="contacts-list-msg">
                                        How have you been? I was...
                                    </span>
                                </div>
                                <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href="#">
                                <img
                                    class="contacts-list-img"
                                    src="{{
                                        asset('assets/img/user7-128x128.jpg')
                                    }}"
                                    alt="User Avatar"
                                />
                                <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        Sarah Doe
                                        <small
                                            class="contacts-list-date float-end"
                                        >
                                            2/23/2023
                                        </small>
                                    </span>
                                    <span class="contacts-list-msg">
                                        I will be waiting for...
                                    </span>
                                </div>
                                <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href="#">
                                <img
                                    class="contacts-list-img"
                                    src="{{
                                        asset('assets/img/user3-128x128.jpg')
                                    }}"
                                    alt="User Avatar"
                                />
                                <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        Nadia Jolie
                                        <small
                                            class="contacts-list-date float-end"
                                        >
                                            2/20/2023
                                        </small>
                                    </span>
                                    <span class="contacts-list-msg">
                                        I'll call you back at...
                                    </span>
                                </div>
                                <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href="#">
                                <img
                                    class="contacts-list-img"
                                    src="{{
                                        asset('assets/img/user5-128x128.jpg')
                                    }}"
                                    alt="User Avatar"
                                />
                                <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        Nora S. Vans
                                        <small
                                            class="contacts-list-date float-end"
                                        >
                                            2/10/2023
                                        </small>
                                    </span>
                                    <span class="contacts-list-msg">
                                        Where is your new...
                                    </span>
                                </div>
                                <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href="#">
                                <img
                                    class="contacts-list-img"
                                    src="{{
                                        asset('assets/img/user6-128x128.jpg')
                                    }}"
                                    alt="User Avatar"
                                />
                                <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        John K.
                                        <small
                                            class="contacts-list-date float-end"
                                        >
                                            1/27/2023
                                        </small>
                                    </span>
                                    <span class="contacts-list-msg">
                                        Can I take a look at...
                                    </span>
                                </div>
                                <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                            <a href="#">
                                <img
                                    class="contacts-list-img"
                                    src="{{
                                        asset('assets/img/user8-128x128.jpg')
                                    }}"
                                    alt="User Avatar"
                                />
                                <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        Kenneth M.
                                        <small
                                            class="contacts-list-date float-end"
                                        >
                                            1/4/2023
                                        </small>
                                    </span>
                                    <span class="contacts-list-msg">
                                        Never mind I found...
                                    </span>
                                </div>
                                <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <!-- End Contact Item -->
                    </ul>
                    <!-- /.contacts-list -->
                </div>
                <!-- /.direct-chat-pane -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <form action="#" method="post">
                    <div class="input-group">
                        <input
                            type="text"
                            name="message"
                            placeholder="Type Message ..."
                            class="form-control"
                        />
                        <span class="input-group-append">
                            <button type="button" class="btn btn-primary">
                                Send
                            </button>
                        </span>
                    </div>
                </form>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.direct-chat -->
    </div>
    <!-- /.Start col -->
    <!-- Start col -->
    <div class="col-lg-5 connectedSortable">
        <div class="card text-white bg-primary bg-gradient border-primary mb-4">
            <div class="card-header border-0">
                <h3 class="card-title">Sales Value</h3>
                <div class="card-tools">
                    <button
                        type="button"
                        class="btn btn-primary btn-sm"
                        data-lte-toggle="card-collapse"
                    >
                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div id="world-map" style="height: 220px"></div>
            </div>
            <div class="card-footer border-0">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-4 text-center">
                        <div id="sparkline-1" class="text-dark"></div>
                        <div class="text-white">Visitors</div>
                    </div>
                    <div class="col-4 text-center">
                        <div id="sparkline-2" class="text-dark"></div>
                        <div class="text-white">Online</div>
                    </div>
                    <div class="col-4 text-center">
                        <div id="sparkline-3" class="text-dark"></div>
                        <div class="text-white">Sales</div>
                    </div>
                </div>
                <!--end::Row-->
            </div>
        </div>
    </div>
    <!-- /.Start col -->
</div>

<script src="{{ asset('js/apexcharts.min.js') }}"></script>
<script>
    const sales_chart_options = {
        series: [
            {
                name: "Digital Goods",
                data: [28, 48, 40, 19, 86, 27, 90],
            },
            {
                name: "Electronics",
                data: [65, 59, 80, 81, 56, 55, 40],
            },
        ],
        chart: {
            height: 300,
            type: "area",
            toolbar: {
                show: false,
            },
        },
        legend: {
            show: false,
        },
        colors: ["#0d6efd", "#20c997"],
        dataLabels: {
            enabled: false,
        },
        stroke: {
            curve: "smooth",
        },
        xaxis: {
            type: "datetime",
            categories: [
                "2023-01-01",
                "2023-02-01",
                "2023-03-01",
                "2023-04-01",
                "2023-05-01",
                "2023-06-01",
                "2023-07-01",
            ],
        },
        tooltip: {
            x: {
                format: "MMMM yyyy",
            },
        },
    };

    const sales_chart = new ApexCharts(
        document.querySelector("#revenue-chart"),
        sales_chart_options
    );
    sales_chart.render();
</script>

<script src="{{ asset('js/jsvectormap.min.js') }}"></script>
<script src="{{ asset('js/world.js') }}"></script>
<script>
    const visitorsData = {
        US: 398, // USA
        SA: 400, // Saudi Arabia
        CA: 1000, // Canada
        DE: 500, // Germany
        FR: 760, // France
        CN: 300, // China
        AU: 700, // Australia
        BR: 600, // Brazil
        IN: 800, // India
        GB: 320, // Great Britain
        RU: 3000, // Russia
    };

    const map = new jsVectorMap({
        selector: "#world-map",
        map: "world",
    });

    const option_sparkline1 = {
        series: [
            {
                data: [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021],
            },
        ],
        chart: {
            type: "area",
            height: 50,
            sparkline: {
                enabled: true,
            },
        },
        stroke: {
            curve: "straight",
        },
        fill: {
            opacity: 0.3,
        },
        yaxis: {
            min: 0,
        },
        colors: ["#DCE6EC"],
    };

    const sparkline1 = new ApexCharts(
        document.querySelector("#sparkline-1"),
        option_sparkline1
    );
    sparkline1.render();

    const option_sparkline2 = {
        series: [
            {
                data: [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921],
            },
        ],
        chart: {
            type: "area",
            height: 50,
            sparkline: {
                enabled: true,
            },
        },
        stroke: {
            curve: "straight",
        },
        fill: {
            opacity: 0.3,
        },
        yaxis: {
            min: 0,
        },
        colors: ["#DCE6EC"],
    };

    const sparkline2 = new ApexCharts(
        document.querySelector("#sparkline-2"),
        option_sparkline2
    );

    sparkline2.render();

    const option_sparkline3 = {
        series: [
            {
                data: [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21],
            },
        ],
        chart: {
            type: "area",
            height: 50,
            sparkline: {
                enabled: true,
            },
        },
        stroke: {
            curve: "straight",
        },
        fill: {
            opacity: 0.3,
        },
        yaxis: {
            min: 0,
        },
        colors: ["#DCE6EC"],
    };

    const sparkline3 = new ApexCharts(
        document.querySelector("#sparkline-3"),
        option_sparkline3
    );

    sparkline3.render();
</script>

@endsection
