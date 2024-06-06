<?php

namespace App\Http\Controllers;


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

public function nav(Request $request){
        
    $keyword = $request->search;
    $data = Kuliner::where('nama_kuliner', 'like', '%'. $keyword. '%')->paginate(3);

    return view('kulinerWeb',compact('data'));
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

        //render view with wisata
        return view('details_kuliner', compact('kuliner'));
    }
}

