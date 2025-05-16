<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{

    public function pageHome(): View
    {
        return view('v_home');
    }

    public function pageOrganisasi(): View
    {
        return view('v_organisasi');
    }

    public function pageKaryawan(): View
    {
        return view('v_karyawan');
    }

    public function pageAbsensi(): View
    {
        return view('v_absensi');
    }

    public function pagePayroll(): View
    {
        return view('v_payroll');
    }

    public function pageBpjs(): View
    {
        return view('v_bpjs');
    }

    public function pageHrd(): View
    {
        return view('v_hrd');
    }
}
