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
                        <p>Kalender Kerja</p>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-add"></i>
                        <p>Jadwal Kerja Non Shift</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-check"></i>
                        <p>Jadwal Kerja Shift</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-dash"></i>
                        <p>Rolling</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-down"></i>
                        <p>Lost Day</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Lost Time</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Jam Kerja</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Pola Libur</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Group Shift</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Cuti</p>
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
                            <strong>2. Absensi & Kehadiran</strong>
                        </p>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>

                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building"></i>
                        <p>Jadwal Kerja</p>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-add"></i>
                        <p>Absensi Harian</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-check"></i>
                        <p>Status Kehadiran</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-dash"></i>
                        <p>Log Aktivitas Absensi</p>
                    </div>
                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-down"></i>
                        <p>Pengajuan Cuti</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Pengajuan Izin</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Saldo Cuti</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Histori Cuti</p>
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
                            <strong>3. Lembur (Overtime)</strong>
                        </p>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Pengaturan Lembur</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Entry Data lembur</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Rekap Lembur</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Pengaturan Kupon</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Rekap Penggunaan Kupon</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-primary text-center p-1">
                        <i class="nav-icon bi bi-building-exclamation"></i>
                        <p>Riwayat Kupon per Karyawan</p>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
