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
                        <p>Komponen Gaji</p>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-add"></i>
                        <p>Potongan Upah</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-check"></i>
                        <p>Hitungan Lembur</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-dash"></i>
                        <p>Hitungan Proposional/Prorate</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-down"></i>
                        <p>Hitungan THR</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Klaim/Reimbursement</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>BPJS</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Pajak</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Upah Bulanan</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Upah Harian</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Upah Borongan</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Insentif/Bonus</p>
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
                            <strong>2. Perhitungan Gaji</strong>
                        </p>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>

                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building"></i>
                        <p>Proses Payroll Bulanan</p>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-add"></i>
                        <p>Proses Payroll Harian</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-check"></i>
                        <p>Proses Payroll Borongan</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-dash"></i>
                        <p>Verifikasi & Approval</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-down"></i>
                        <p>Rekap Gaji</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Slip Gaji</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>File Transfer ke Bank (excel, csv)</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Pengiriman Slip Gaji via Email</p>
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
                            <strong>3. Laporan Payroll</strong>
                        </p>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Total Payroll per Bulan</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Gaji per Departemen</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Potongan Gaji</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Gaji Individual</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
