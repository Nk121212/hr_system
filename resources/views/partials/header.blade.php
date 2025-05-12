<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>@yield('title', 'HR SYSTEM')</title>
        <!--begin::Primary Meta Tags-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="title" content="AdminLTE v4 | Dashboard" />
        <meta name="author" content="ColorlibHQ" />
        <meta
            name="description"
            content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS."
        />
        <meta
            name="keywords"
            content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"
        />

        <link rel="icon" href="{{ asset('assets/img/myfavicon.ico') }}" type="image/x-icon">

        <link rel="stylesheet" href="{{ asset('css/style.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
        <link rel="stylesheet" href="{{
            asset("css/overlayscrollbars.min.css")
        }}" />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        />
        <!--end::Third Party Plugin(Bootstrap Icons)-->
        <!--begin::Required Plugin(AdminLTE)-->
        <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}" />
        <!--end::Required Plugin(AdminLTE)-->
        <!-- apexcharts -->
        <link rel="stylesheet" href="{{ asset('css/apexcharts.css') }}" />
        <!-- jsvectormap -->
        <link rel="stylesheet" href="{{ asset('css/jsvectormap.min.css') }}" />

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    </head>
</html>
