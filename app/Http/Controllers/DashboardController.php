<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\MataPelajaran;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahGuru = Guru::count();
        $jumlahSiswa = Siswa::count();
        $jumlahMapel = MataPelajaran::count();
        $jumlahKelas = Kelas::count();
        return view("dashboard.index", compact('jumlahGuru', 'jumlahSiswa', 'jumlahMapel', 'jumlahKelas'));
    }
}
