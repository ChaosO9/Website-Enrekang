<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Kuliner;
use App\Models\Penginapan;
use App\Models\Saran;
use App\Models\Wisata;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $jumlahWisata = Wisata::count();
        $jumlahKuliner = Kuliner::count();
        $jumlahPenginapan = Penginapan::count();
        $jumlahEvent = Event::count();
        $jumlahSaran = Saran::count();

        return view('dashboard', compact('jumlahWisata', 'jumlahKuliner', 'jumlahPenginapan', 'jumlahEvent', 'jumlahSaran'));
    }
}
