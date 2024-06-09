<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\FasilitasLokasi as ModelsFasilitasLokasi;
use App\Models\GambarLokasi;
use App\Models\Kategori;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\React;

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
        if ($request->hasFile('foto')) {
            $imageName = $request->foto->getClientOriginalName();
            $request->foto->move(public_path('/images'), $imageName);
            $dataGambar = ['foto_wisata' => $imageName];
        } else {
            $dataGambar = ['foto_wisata' => 'no-image.png'];
        }

        $data = [
            'nama_wisata' => $request->nama_wisata,
            'alamat_wisata' => $request->alamat_wisata,
            'harga_tiket' => $request->harga_tiket,
            'id_kategori' => $request->kategori,
            'deskripsi_wisata' => $request->deskripsi_wisata,
            'maps' => $request->maps,
            'tanggal_upload' => $request->tanggal_upload,
        ];

        $data = array_merge($data, $dataGambar);

        // dd($data);
        // exit();


        $wisata = Wisata::create($data);

        $fasilitas_wisata = $request->input('fasilitas');

        if (isset($fasilitas_wisata)) {
            for ($i = 0; $i < count($fasilitas_wisata); $i++) {
                ModelsFasilitasLokasi::create([
                    'wisata' => $wisata->id,
                    'fasilitas' => $fasilitas_wisata[$i],
                ]);
            }
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
        $wisata = Wisata::find($id);

        $data = [
            'nama_wisata' => $request->nama_wisata,
            'alamat_wisata' => $request->alamat_wisata,
            'harga_tiket' => $request->harga_tiket,
            'id_kategori' => $request->kategori,
            'fasilitas' => $request->fasilitas,
            'deskripsi_wisata' => $request->deskripsi_wisata,
            'maps' => $request->maps,
            'tanggal_upload' => $request->tanggal_upload,
        ];

        if ($request->hasFile('foto')) {
            $imageName = $request->foto->getClientOriginalName();
            $request->foto->move(public_path('/images'), $imageName);
            $data['foto_wisata'] = $imageName;
        } else {
            isset($wisata->foto_wisata) ? $data['foto_wisata'] = $wisata->foto_wisata : $data['foto_wisata'] = 'no-image.png';
        }

        // if (isset($data['foto_wisata'])) {
        //     $data['foto_wisata'] = $imageName;
        // }

        $wisata->update($data);

        ModelsFasilitasLokasi::where('wisata', $id)->delete();

        $fasilitas_wisata = $request->input('fasilitas');

        if (isset($fasilitas_wisata)) {
            for ($i = 0; $i < count($fasilitas_wisata); $i++) {
                ModelsFasilitasLokasi::create([
                    'wisata' => $wisata->id,
                    'fasilitas' => $fasilitas_wisata[$i],
                ]);
            }
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
        $kategori = Kategori::all();
        $keyword = $request->search;
        // $data = Wisata::where('nama_wisata', 'like', '%' . $keyword . '%')
        //     ->orWhere('deskripsi_wisata', 'like', '%' . $keyword . '%')
        //     ->paginate(6);
        $data = Wisata::filter()->paginate(6);


        return view('wisataWeb', compact('data', 'kategori'));
    }

    public function urlParamBuilder(Request $request)
    {
        $request_filter_kategori = $request->input('kategori');
        $hargaMinimal = $request->input('harga_minimal') == '' ? 0 : $request->input('harga_minimal');
        $hargaMaximal = $request->input('harga_maksimal') == '' ? 0 : $request->input('harga_maksimal');
        $sortAZHarga = $request->input('radioButtonSort') == '' ? '' : $request->input('radioButtonSort');
        $keyword = $request->search == '' ? '' : $request->search;

        $UrlParam = '?';

        if (isset($request_filter_kategori)) {
            $UrlParam .= 'in=id_kategori,';
            for ($i = 0; $i < count($request_filter_kategori); $i++) {
                $i + 1 < count($request_filter_kategori) ? ($UrlParam .= $request_filter_kategori[$i] . ',') : ($UrlParam .= $request_filter_kategori[$i]);
            }
        }

        if ($keyword != '') {
            $UrlParam .= 'like[0]=nama_wisata,' . $keyword . '&like[1]=deskripsi_wisata,' . $keyword;
        }

        if ($hargaMaximal != 0 && $hargaMinimal != 0) {
            $UrlParam .= '&between=harga_tiket,' . $hargaMinimal . ',' . $hargaMaximal;
        } elseif ($hargaMaximal == 0 && $hargaMinimal == 0) {
        } elseif ($hargaMinimal == 0) {
            $UrlParam .= '&less_or_equal=harga_tiket,' . $hargaMaximal;
        } elseif ($hargaMaximal == 0) {
            $UrlParam .= '&greater_or_equal=harga_tiket,' . $hargaMinimal;
        }

        if ($sortAZHarga == "asc") {
            $UrlParam .= '&sort=nama_wisata,asc';
        } elseif ($sortAZHarga == "desc") {
            $UrlParam .= '&sort=nama_wisata,desc';
        } elseif ($sortAZHarga == "harga_desc") {
            $UrlParam .= '&sort=harga_tiket,desc';
        } elseif ($sortAZHarga == "harga_asc") {
            $UrlParam .= '&sort=harga_tiket,asc';
        }

        return redirect('/wisata/tampil' . $UrlParam);
    }

    public function gambar($id)
    {
        $wisata = Wisata::find($id);
        return view('wisata.gambar', compact('wisata'));
    }

    public function tambahGambar($id, Request $request, $from = null)
    {
        $originalName = $request->foto->getClientOriginalName();
        $uniqueId = time();
        $fileName = $uniqueId . '_' . $originalName;
        $request->foto->move(public_path('/images'), $fileName);
        $deskripsi = $request->input('deskripsi_gambar');

        GambarLokasi::create([
            'wisata' => $id,
            'gambar' => $fileName,
            'deskripsi' => $deskripsi
        ]);

        if ($from == 'detail_wisata') {
            return redirect()->route('wisata.show', $id);
        } else if ($from == null) {
            return redirect()->route('wisata2');
        }
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show($id)
    {
        $wisata_lain2 = Wisata::all();
        $wisata = Wisata::find($id);
        $fasilitas = $wisata->fasilitas()->pluck('nama')->all();
        $galeri = $wisata->gambar;
        return view('details_wisata', compact('wisata', 'fasilitas', 'wisata_lain2', 'galeri'));
    }
}