<?php

namespace App\Http\Controllers;

use App\Models\GambarKuliner;
use App\Models\Kuliner;
use Illuminate\Http\Request;

class KulinerController extends Controller
{

    public function index()
    {
        $kuliner = Kuliner::get();

        return view('kuliner.index', ['data' => $kuliner]);
    }
    public function index2()
    {
        $kuliner = Kuliner::get();

        return view('kuliner.index', ['data' => $kuliner]);
    }
    public function tambah()
    {
        return view('kuliner.form');
    }

    public function simpan(Request $request)
    {

        $imageName = $request->foto->getClientOriginalName();
        $request->foto->move(public_path('/images'), $imageName);

        $data = [
            'nama_kuliner' => $request->nama_kuliner,
            'foto_kuliner' => $imageName,
            'alamat_kuliner' => $request->alamat_kuliner,
            'harga_kuliner' => $request->harga_kuliner,
            'deskripsi_kuliner' => $request->deskripsi_kuliner,
        ];

        Kuliner::create($data);

        return redirect()->route('kuliner2');
    }

    public function edit($id)
    {
        $kuliner = Kuliner::where('id', $id)->first();

        return view('kuliner.form', ['kuliner' => $kuliner]);
    }

    public function update($id, Request $request)
    {
        $imageName = $request->foto->getClientOriginalName();
        $request->foto->move(public_path('/images'), $imageName);

        $data = [
            'nama_kuliner' => $request->nama_kuliner,
            'foto_kuliner' => $imageName,
            'alamat_kuliner' => $request->alamat_kuliner,
            'harga_kuliner' => $request->harga_kuliner,
            'deskripsi_kuliner' => $request->deskripsi_kuliner,
        ];

        Kuliner::find($id)->update($data);

        return redirect()->route('kuliner2');
    }

    public function hapus($id)
    {
        Kuliner::find($id)->delete();

        return redirect()->route('kuliner');
    }

    public function nav(Request $request)
    {
        // $keyword = $request->search;
        // $data = Kuliner::where('nama_kuliner', 'like', '%' . $keyword . '%')->paginate(3);
        $data = Kuliner::filter()->paginate(3);


        return view('kulinerWeb', compact('data'));
    }
    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show($id)
    {
        //get wisata by ID
        $kuliner = Kuliner::find($id);
        $galeri = $kuliner->gambar;

        //render view with wisata
        return view('details_kuliner', compact('kuliner', 'galeri'));
    }

    public function urlParamBuilder(Request $request)
    {
        $hargaMinimal = $request->input('harga_minimal') == '' ? 0 : $request->input('harga_minimal');
        $hargaMaximal = $request->input('harga_maksimal') == '' ? 0 : $request->input('harga_maksimal');
        $sortAZHarga = $request->input('radioButtonSort') == '' ? '' : $request->input('radioButtonSort');
        $keyword = $request->search == '' ? '' : $request->search;

        $UrlParam = '?';

        if ($keyword != '') {
            $UrlParam .= 'like[0]=nama_kuliner,' . $keyword . '&like[1]=deskripsi_kuliner,' . $keyword;
        }

        if ($hargaMaximal != 0 && $hargaMinimal != 0) {
            $UrlParam .= '&between=harga_kuliner,' . $hargaMinimal . ',' . $hargaMaximal;
        } elseif ($hargaMaximal == 0 && $hargaMinimal == 0) {
        } elseif ($hargaMinimal == 0) {
            $UrlParam .= '&less_or_equal=harga_kuliner,' . $hargaMaximal;
        } elseif ($hargaMaximal == 0) {
            $UrlParam .= '&greater_or_equal=harga_kuliner,' . $hargaMinimal;
        }

        if ($sortAZHarga == "asc") {
            $UrlParam .= '&sort=nama_kuliner,asc';
        } elseif ($sortAZHarga == "desc") {
            $UrlParam .= '&sort=nama_kuliner,desc';
        } elseif ($sortAZHarga == "harga_desc") {
            $UrlParam .= '&sort=harga_kuliner,desc';
        } elseif ($sortAZHarga == "harga_asc") {
            $UrlParam .= '&sort=harga_kuliner,asc';
        }

        return redirect('/kuliner/tampil' . $UrlParam);
    }

    public function gambar($id)
    {
        $kuliner = Kuliner::find($id);
        return view('kuliner.gambar', compact('kuliner'));
    }

    public function tambahGambar($id, Request $request, $from = null)
    {
        $originalName = $request->foto->getClientOriginalName();
        $uniqueId = time();
        $fileName = $uniqueId . '_' . $originalName;
        $request->foto->move(public_path('/images'), $fileName);
        $deskripsi = $request->input('deskripsi_gambar');

        GambarKuliner::create([
            'kuliner' => $id,
            'gambar' => $fileName,
            'deskripsi' => $deskripsi
        ]);

        if ($from == 'detail_kuliner') {
            return redirect()->route('kuliner.show', $id);
        } else if ($from == null) {
            return redirect()->route('kuliner2');
        }
    }
}