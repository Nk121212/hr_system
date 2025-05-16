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
                        <p>Karyawan</p>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-add"></i>
                        <p>Keluarga</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-check"></i>
                        <p>Pendidikan Formal</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-dash"></i>
                        <p>Pendidikan Informal</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-down"></i>
                        <p>Pengalaman Kerja</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>ID Card Karyawan</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <!--end::Col-->
                <div class="col-lg-12 col-12">
                    <hr class="border-secondary" />
                </div>

                <div class="col-lg-12 col-12">
                    <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-secondary">
                        <p class="my-p-fs-lg p-2">
                            <strong>2. Informasi Karyawan</strong>
                        </p>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>

                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building"></i>
                        <p>Riwayat Kehadiran</p>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-add"></i>
                        <p>Riwayat Lembur</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-check"></i>
                        <p>Riwayat Surat Peringatan</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-dash"></i>
                        <p>Cetak ID Card Karyawan</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-down"></i>
                        <p>Profil Karyawan</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>CV Karyawan</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
