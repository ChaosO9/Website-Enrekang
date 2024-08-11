<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.kategori',compact('kategori'));
        
    }

    public function create()
    {
        return view('kategori.tambahKategori');
    }

    public function store(Request $request){
        $data = [
            'nama_kategori' => $request->nama_kategori,
        ];
        Kategori::create($data);
        
        toast('Kategori berhasil ditambah!','success');
        return redirect('kategori');
    }

    public function hapus($id)
    {
        Kategori::find($id)->delete();
    
        toast('Kategori berhasil dihapus!','success');
        return redirect()->route('kategori');
    }
}
