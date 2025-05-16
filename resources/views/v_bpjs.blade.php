@extends('app') @section('title', 'Data Karyawan') @section('content')
<main class="app-main">
    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <!--begin::Col-->
                <div class="col-lg-12 col-12">
                    <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-secondary">
                        <p class="my-p-fs-lg p-2">
                            <strong>1. Master Data</strong>
                        </p>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>

                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building"></i>
                        <p>BPJS Kesehatan & Ketenagakerjaan</p>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-add"></i>
                        <p>PPh 21</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>

                <!--end::Col-->
                <div class="col-lg-12 col-12">
                    <hr class="border-secondary" />
                </div>

                <div class="col-lg-12 col-12">
                    <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-secondary">
                        <p class="my-p-fs-lg p-2">
                            <strong>2. Keanggotaan BPJS</strong>
                        </p>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>

                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building"></i>
                        <p>Anggota BPJS</p>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-add"></i>
                        <p>Status Kepesertaan</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-check"></i>
                        <p>Laporan BPJS</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-dash"></i>
                        <p>Laporan PPH 21</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
            </div>
        </div>
    </div>
</main>
@endsection
