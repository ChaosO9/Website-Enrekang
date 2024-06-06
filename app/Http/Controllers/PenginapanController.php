<?php

namespace App\Http\Controllers;

use App\Models\Penginapan;
use Illuminate\Http\Request;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class PenginapanController extends Controller
{
    public function index()
    {
        $penginapan = Penginapan::get();
        
        return view ('penginapan.index', ['data' => $penginapan]);
    } 

    public function index2()
    {
        $penginapan = Penginapan::get();
        
        return view('penginapan.index', ['data' => $penginapan]);
    } 

    public function tambah()
    {
        return view('penginapan.form');
    }


    public function simpan(Request $request)
    {
        $imageName = $request->foto->getClientOriginalName();
        $request->foto->move(public_path('/images'), $imageName);

        $data = [
            'nama_penginapan' => $request->nama_penginapan,
            'foto_penginapan' => $imageName,
            'alamat_penginapan' => $request->alamat_penginapan,
            'harga_penginapan' => $request->harga_penginapan,
            'deskripsi_penginapan' => $request->deskripsi_penginapan,
            'maps' => $request->maps,
        ];
        Penginapan::create($data);
        
        return redirect()->route('penginapan2');
    }

    public function edit($id)
    {
        $penginapan = Penginapan::where('id', $id)->first();

        return view('penginapan.form', ['penginapan' => $penginapan]);
    }

    public function update($id, Request $request)
    {

        $imageName = $request->foto->getClientOriginalName();
        $request->foto->move(public_path('/images'), $imageName);
        
        $data = [
            'nama_penginapan' => $request->nama_penginapan,
            'foto_penginapan' => $imageName,
            'alamat_penginapan' => $request->alamat_penginapan,
            'harga_penginapan' => $request->harga_penginapan,
            'deskripsi_penginapan' => $request->deskripsi_penginapan,
            'maps' => $request->maps,
        ];

         Penginapan::find($id)->update($data);

         return redirect()->route('penginapan2');
    }

    public function hapus($id)
{
    Penginapan::find($id)->delete();

    return redirect()->route('penginapan2');
}

    public function nav(Request $request){
        
    $keyword = $request->search;
    $data = Penginapan::where('nama_penginapan', 'like', '%'. $keyword. '%')->paginate(6);

    return view('penginapanWeb',compact('data'));
    }

    public function detail(){
        $data = Penginapan::all();

        return view ('portfolio-details', compact('data'));
    }


    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show($id)
    {
        //get penginapan by ID
        $penginapan = Penginapan::find($id);

        //render view with penginapan
        return view('details_penginapan', compact('penginapan'));
    }
}

