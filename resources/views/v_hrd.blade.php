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
                        <p>Format Kontrak Kerja</p>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-add"></i>
                        <p>Format Surat Perintah Kerja</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-check"></i>
                        <p>Format Surat Izin Pulang</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-dash"></i>
                        <p>Format Izin Terlambat Masuk Kerja</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-down"></i>
                        <p>Format Surat Izin Tidak Masuk/Cuti</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Format Surat izin Keluar Sementara</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Format Surat Peringatan</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Format Permintaan Tenaga Kerja</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Format Surat Perjalanan Dinas</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Format Mutasi Karyawan</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Format Promosi Karyawan</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Format Demosi Karyawan</p>
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
                            <strong>2. Entry Data</strong>
                        </p>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>

                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building"></i>
                        <p>Kontrak Kerja</p>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-add"></i>
                        <p>Surat Peringatan</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-check"></i>
                        <p>Mutasi Karyawan</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-dash"></i>
                        <p>Promosi Karyawan</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-down"></i>
                        <p>Notifikasi Habis Kontrak</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>

                <div class="col-lg-12 col-12">
                    <hr class="border-secondary" />
                </div>

                <div class="col-lg-12 col-12">
                    <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-secondary">
                        <p class="my-p-fs-lg p-2">
                            <strong>3. Laporan</strong>
                        </p>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Kontrak Kerja</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Surat Peringatan</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Mutasi Karyawan</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Promosi Karyawan</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
