<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\FasilitasLokasi as ModelsFasilitasLokasi;
use App\Models\Kategori;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WisataController extends Controller
{
    public function index()
    {
        $wisata = Wisata::get();

        return view('wisata.index', ['data' => $wisata]);
    }

    public function index2()
    {
        // // $wisata = Wisata::with('fasilitas')->get();
        // $wisata = DB::table('wisata')
        //     ->join('fasilitas_lokasi', 'wisata.id', '=', 'fasilitas_lokasi.wisata') // Joining wisata with the pivot table
        //     ->join('fasilitas', 'fasilitas_lokasi.fasilitas', '=', 'fasilitas.id') // Joining the pivot table with fasilitas
        //     ->select('wisata.*', 'fasilitas.nama as fasilitas_nama') // Selecting columns
        //     ->get();

        $wisata = DB::table('wisata')->get();

        $wisataWithFasilitas = $wisata->map(function ($item) {
            $wisata = Wisata::find($item->id);
            $item->fasilitas = $wisata->fasilitas()->pluck('nama')->all();
            // $item->fasilitas = DB::table('fasilitas')
            //     ->where('wisata_id', $item->id) // Assuming 'wisata_id' is the foreign key in 'fasilitas' table
            //     ->get();
            return $item;
        });

        // dd($wisata);
        // dd($wisataWithFasilitas);
        // exit();

        return view('wisata.index', ['data' => $wisata]);
    }

    public function tambah()
    {
        $kategori = Kategori::all();
        $fasilitas = Fasilitas::all();
        return view('wisata.tambah', compact('kategori', 'fasilitas'));
    }


    public function simpan(Request $request)
    {
        $imageName = $request->foto->getClientOriginalName();
        $request->foto->move(public_path('/images'), $imageName);

        $data = [
            'nama_wisata' => $request->nama_wisata,
            'foto_wisata' => $imageName,
            'alamat_wisata' => $request->alamat_wisata,
            'harga_tiket' => $request->harga_tiket,
            'id_kategori' => $request->kategori,
            'deskripsi_wisata' => $request->deskripsi_wisata,
            'maps' => $request->maps,
            'tanggal_upload' => $request->tanggal_upload,

        ];

        $wisata = Wisata::create($data);

        $fasilitas_wisata = $request->input('fasilitas');

        for ($i = 0; $i < count($fasilitas_wisata); $i++) {
            ModelsFasilitasLokasi::create([
                'wisata' => $wisata->id,
                'fasilitas' => $fasilitas_wisata[$i],
            ]);
        }

        return redirect()->route('wisata2');
    }

    public function edit($id)
    {
        $wisata = Wisata::where('id', $id)->first();
        $kategori = Kategori::all();
        $fasilitas = Fasilitas::all();
        $fasilitas_wisata2 = ModelsFasilitasLokasi::where('wisata', $id)->get();
        $fasilitas_wisata = [];
        foreach ($fasilitas_wisata2 as $fasilitas_wisata2) {
            $fasilitas_wisata[] = $fasilitas_wisata2->fasilitas;
        }

        return view('wisata.tambah', ['wisata' => $wisata, 'kategori' => $kategori, 'fasilitas' => $fasilitas, 'fasilitas_wisata' => $fasilitas_wisata]);
    }

    public function update($id, Request $request)
    {
        $imageName = $request->foto->getClientOriginalName();
        $request->foto->move(public_path('/images'), $imageName);

        $data = [
            'nama_wisata' => $request->nama_wisata,
            'foto_wisata' => $imageName,
            'alamat_wisata' => $request->alamat_wisata,
            'harga_tiket' => $request->harga_tiket,
            'id_kategori' => $request->kategori,
            'fasilitas' => $request->fasilitas,
            'deskripsi_wisata' => $request->deskripsi_wisata,
            'maps' => $request->maps,
            'tanggal_upload' => $request->tanggal_upload,
        ];

        Wisata::find($id)->update($data);

        ModelsFasilitasLokasi::where('wisata', $id)->delete();

        $fasilitas_wisata = $request->input('fasilitas');

        for ($i = 0; $i < count($fasilitas_wisata); $i++) {
            ModelsFasilitasLokasi::create([
                'wisata' => $id,
                'fasilitas' => $fasilitas_wisata[$i],
            ]);
        }

        return redirect()->route('wisata2');
    }

    public function hapus($id)
    {
        Wisata::find($id)->delete();

        return redirect()->route('wisata2');
    }

    public function nav(Request $request)
    {

        $keyword = $request->search;
        $data = Wisata::where('nama_wisata', 'like', '%' . $keyword . '%')
            ->orWhere('deskripsi_wisata', 'like', '%' . $keyword . '%')
            ->paginate(6);

        return view('wisataWeb', compact('data'));
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show($id)
    {
        $wisata = Wisata::find($id);
        $fasilitas = $wisata->fasilitas()->pluck('nama')->all();
        return view('details_wisata', compact('wisata', 'fasilitas'));
    }
}