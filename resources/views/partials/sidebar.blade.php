<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
                src="{{ asset('assets/img/AdminLTELogo.png') }}"
                alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">AdminLTE 4</span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2" aria-label="Menu Sidebar">
            <!--begin::Sidebar Menu-->
            <ul
                class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                data-accordion="false"
            >
                <li class="nav-item">
                    <a
                        href="{{ route('home') }}"
                        class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                    >
                        <i class="nav-icon bi bi-laptop"></i>
                        <p>Desktop</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        href="{{ route('struktur_organisasi') }}"
                        class="nav-link {{ Route::currentRouteName() == 'struktur_organisasi' ? 'active' : '' }}"
                    >
                        <i class="nav-icon bi bi-diagram-3"></i>
                        <p>Struktur Organisasi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        href="{{ route('home') }}"
                        class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                    >
                        <i class="nav-icon bi bi-person"></i>
                        <p>Data Karyawan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        href="{{ route('home') }}"
                        class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                    >
                        <i class="nav-icon bi bi-fingerprint"></i>
                        <p>Absensi & Kehadiran</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        href="{{ route('home') }}"
                        class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                    >
                        <i class="nav-icon bi bi-cash-coin"></i>
                        <p>Payroll & Penggajian</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        href="{{ route('home') }}"
                        class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                    >
                        <i class="nav-icon bi bi-credit-card"></i>
                        <p>BPJS & Pajak</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        href="{{ route('home') }}"
                        class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                    >
                        <i class="nav-icon bi bi-file-earmark-text"></i>
                        <p>Dokumen HR & Surat</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        href="{{ route('home') }}"
                        class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                    >
                        <i class="nav-icon bi bi-star"></i>
                        <p>Penilaian Karyawan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        href="{{ route('home') }}"
                        class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                    >
                        <i class="nav-icon bi bi-bullseye"></i>
                        <p>KPI & Target</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        href="{{ route('home') }}"
                        class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                    >
                        <i class="nav-icon bi bi-play-btn"></i>
                        <p>Program Pelatihan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        href="{{ route('home') }}"
                        class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                    >
                        <i class="nav-icon bi bi-gear"></i>
                        <p>Self Service</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        href="{{ route('home') }}"
                        class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                    >
                        <i class="nav-icon bi bi-key"></i>
                        <p>Manajemen Akses</p>
                    </a>
                </li>
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
