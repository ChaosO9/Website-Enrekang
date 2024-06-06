<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;

class SaranController extends Controller
{
    public function index()
    {
        $saran = Saran::get();
        
        return view('saran.index', ['data' => $saran]);
    } 

    public function index2()
    {
        $saran = Saran::get();
        
        return view('saran.index', ['data' => $saran]);
    } 

    public function tambah()
    {
        return view('saran.form');
    }


    public function store(Request $request)
    {

        $data = [
            'nama' => $request->name,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'saran' => $request->message,

        ];
        Saran::create($data);
        
        toast('Your Post as been submited!','success');
        return redirect()->back();
        // return view('saran.index');
    }

    public function edit($id)
    {
        $saran = Saran::where('id', $id)->first();

        return view('saran.form', ['saran' => $saran]);
    }

    public function update($id, Request $request)
    {

        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'saran' => $request->saran,
        ];

         Saran::find($id)->update($data);

         return redirect()->route('saran');
    }

    public function hapus($id)
{
    Saran::find($id)->delete();

    return redirect()->route('saran');
}
}
