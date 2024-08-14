<?php

namespace App\Http\Controllers;

use App\Models\GambarKuliner;
use App\Models\Kuliner;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

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
        $data = [
            'nama_kuliner' => $request->nama_kuliner,
            'alamat_kuliner' => $request->alamat_kuliner,
            'harga_kuliner' => $request->harga_kuliner,
            'deskripsi_kuliner' => $request->deskripsi_kuliner,
        ];

        if ($request->hasFile('foto')) {
            $manager = new ImageManager(new Driver());
            $imageName = uniqid('', true) . '_' . time() . '.webp';
            $image = $manager->read($request->foto)->toWebp(90);
            $image->save(base_path('public/images/kuliner/' . $imageName));
            $data['foto_kuliner'] = $imageName;
        } else {
            $data['foto_kuliner'] = 'no-image.webp';
        }

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
        $kuliner = Kuliner::find($id);

        $data = [
            'nama_kuliner' => $request->nama_kuliner,
            'alamat_kuliner' => $request->alamat_kuliner,
            'harga_kuliner' => $request->harga_kuliner,
            'deskripsi_kuliner' => $request->deskripsi_kuliner,
        ];

        if ($request->hasFile('foto')) {
            $manager = new ImageManager(new Driver());
            $imageName = uniqid('', true) . '_' . time() . '.webp';
            $image = $manager->read($request->foto)->toWebp(90);
            $image->save(base_path('public/images/kuliner/' . $imageName));
            $data['foto_kuliner'] = $imageName;
        } else {
            isset($kuliner->foto_kuliner) ? $data['foto_kuliner'] = $kuliner->foto_kuliner : $data['foto_kuliner'] = 'no-image.webp';
        }

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
        $kuliner = Kuliner::find($id)->get();

        $semua_reviews = $kuliner->review()->with('user');
        $reviews = $semua_reviews->map(function ($review) {
            $review->username = $review->user->name;
            $review->user_created_at = $review->user->created_at;
            return $review;
        });
        $jumlah_ulasan = $kuliner->review()->count();
        if ($jumlah_ulasan > 0) {
            $jumlah_rating = $kuliner->review()->sum('rating_bintang');
            $rating_rata2 = intval(number_format($jumlah_rating / $jumlah_ulasan));
        } else {
            $rating_rata2 = 0;
        }

        //render view with wisata
        return view('details_kuliner', compact('kuliner', 'reviews', 'semua_reviews', 'jumlah_ulasan', 'rating_rata2'));
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

    // public function tambahGambar($id, Request $request, $from = null)
    // {
    //     $originalName = $request->foto->getClientOriginalName();
    //     $uniqueId = time();
    //     $fileName = $uniqueId . '_' . $originalName;
    //     $request->foto->move(public_path('/images'), $fileName);
    //     $deskripsi = $request->input('deskripsi_gambar');

    //     GambarKuliner::create([
    //         'kuliner' => $id,
    //         'gambar' => $fileName,
    //         'deskripsi' => $deskripsi
    //     ]);

    //     if ($from == 'detail_kuliner') {
    //         return redirect()->route('kuliner.show', $id);
    //     } else if ($from == null) {
    //         return redirect()->route('kuliner2');
    //     }
    // }
}