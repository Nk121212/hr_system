@include('partials.header')

<div class="container">
    <main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
    @yield('content')
</div>

@include('partials.footer')
