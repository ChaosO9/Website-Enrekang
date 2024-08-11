<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('fasilitas.fasilitas', compact('fasilitas'));
    }

    public function create()
    {
        return view('fasilitas.tambahFasilitas');
    }

    public function store(Request $request)
    {
        $data = [
            'nama' => $request->nama_fasilitas,
        ];
        Fasilitas::create($data);

        toast('Fasilitas berhasil ditambah!', 'success');
        return redirect('fasilitas');
    }

    public function hapus($id)
    {
        Fasilitas::find($id)->delete();

        toast('Fasilitas berhasil dihapus!', 'success');
        return redirect()->route('fasilitas');
    }
}
