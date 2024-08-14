<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\FasilitasPenginapan;
use App\Models\GambarPenginapan;
use App\Models\Penginapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class PenginapanController extends Controller
{
    public function index()
    {
        $penginapan = Penginapan::get();

        return view('penginapan.index', ['data' => $penginapan]);
    }

    public function index2()
    {
        $penginapan = Penginapan::get();

        return view('penginapan.index', ['data' => $penginapan]);
    }

    public function tambah()
    {
        $fasilitas = Fasilitas::all();
        return view('penginapan.form', compact('fasilitas'));
    }


    public function simpan(Request $request)
    {
        $data = [
            'nama_penginapan' => $request->nama_penginapan,
            'alamat_penginapan' => $request->alamat_penginapan,
            'harga_penginapan' => $request->harga_penginapan,
            'deskripsi_penginapan' => $request->deskripsi_penginapan,
            'maps' => $request->maps,
        ];

        if ($request->hasFile('foto')) {
            $manager = new ImageManager(new Driver());
            $imageName = uniqid('', true) . '_' . time() . '.webp';
            $image = $manager->read($request->foto)->toWebp(90);
            $image->save(base_path('public/images/penginapan/' . $imageName));
            $data['foto_penginapan'] = $imageName;
        } else {
            $data['foto_penginapan'] = 'no-image.webp';
        }

        $penginapan = Penginapan::create($data);

        $fasilitas_penginapan = $request->input('fasilitas');

        if (isset($fasilitas_penginapan)) {
            for ($i = 0; $i < count($fasilitas_penginapan); $i++) {
                FasilitasPenginapan::create([
                    'penginapan' => $penginapan->id,
                    'fasilitas' => $fasilitas_penginapan[$i],
                ]);
            }
        }

        return redirect()->route('penginapan2');
    }

    public function edit($id)
    {
        $penginapan = Penginapan::where('id', $id)->first();
        $fasilitas = Fasilitas::all();
        $fasilitas_penginapan2 = FasilitasPenginapan::where('penginapan', $id)->get();
        $fasilitas_penginapan = [];
        foreach ($fasilitas_penginapan2 as $fasilitas_penginapan2) {
            $fasilitas_penginapan[] = $fasilitas_penginapan2->fasilitas;
        }

        return view('penginapan.form', ['penginapan' => $penginapan, 'fasilitas' => $fasilitas, 'fasilitas_penginapan' => $fasilitas_penginapan]);
    }

    public function update($id, Request $request)
    {
        $penginapan = Penginapan::find($id);

        $data = [
            'nama_penginapan' => $request->nama_penginapan,
            'alamat_penginapan' => $request->alamat_penginapan,
            'harga_penginapan' => $request->harga_penginapan,
            'deskripsi_penginapan' => $request->deskripsi_penginapan,
            'maps' => $request->maps,
        ];

        if ($request->hasFile('foto')) {
            $manager = new ImageManager(new Driver());
            $imageName = uniqid('', true) . '_' . time() . '.webp';
            $image = $manager->read($request->foto)->toWebp(90);
            $image->save(base_path('public/images/penginapan/' . $imageName));
            $data['foto_penginapan'] = $imageName;
        } else {
            isset($penginapan->foto_penginapan) ? $data['foto_penginapan'] = $penginapan->foto_penginapan : $data['foto_penginapan'] = 'no-image.webp';
        }

        Penginapan::find($id)->update($data);

        FasilitasPenginapan::where('penginapan', $id)->delete();

        $fasilitas_penginapan = $request->input('fasilitas');

        if (isset($fasilitas_penginapan)) {
            for ($i = 0; $i < count($fasilitas_penginapan); $i++) {
                FasilitasPenginapan::create([
                    'penginapan' => $penginapan->id,
                    'fasilitas' => $fasilitas_penginapan[$i],
                ]);
            }
        }

        return redirect()->route('penginapan2');
    }

    public function hapus($id)
    {
        Penginapan::find($id)->delete();

        return redirect()->route('penginapan2');
    }

    public function nav(Request $request)
    {
        // $keyword = $request->search;
        // $data = Penginapan::where('nama_penginapan', 'like', '%' . $keyword . '%')->paginate(6);
        $data = Penginapan::filter()->paginate(6);

        return view('penginapanWeb', compact('data'));
    }

    public function detail()
    {
        $data = Penginapan::all();

        return view('portfolio-details', compact('data'));
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show($id)
    {
        $ikon_fasilitas = [
            'Toilet' => '<i class="fa-solid fa-toilet"></i>',
            'Kantin' => '<i class="fa-solid fa-pot-food"></i>',
            'Area Parkir' => '<i class="fa-solid fa-square-parking"></i>',
            'Pusat Informasi' => '<i class="fa-sharp fa-solid fa-circle-info"></i>',
            'Tempat Istirahat' => '<i class="fa-solid fa-bed"></i>',
            'Tempat Ibadah' => '<i class="fa-solid fa-mosque"></i>',
            'Wifi' => '<i class="fa-solid fa-wifi"></i>',
        ];

        //get penginapan by ID
        $penginapan = Penginapan::find($id);
        $fasilitas = $penginapan->fasilitas()->pluck('nama')->all();

        $semua_reviews = $penginapan->review()->with('user');
        $reviews = $semua_reviews->get()->map(function ($review) {
            $review->username = $review->user->name;
            $review->user_created_at = $review->user->created_at;
            return $review;
        });
        $jumlah_ulasan = $penginapan->review()->count();
        if ($jumlah_ulasan > 0) {
            $jumlah_rating = $penginapan->review()->sum('rating_bintang');
            $rating_rata2 = intval(number_format($jumlah_rating / $jumlah_ulasan));
        } else {
            $rating_rata2 = 0;
        }

        //render view with penginapan
        return view('details_penginapan', compact('penginapan', 'fasilitas', 'ikon_fasilitas', 'semua_reviews', 'jumlah_ulasan', 'reviews', 'rating_rata2'));
    }

    public function urlParamBuilder(Request $request)
    {
        $hargaMinimal = $request->input('harga_minimal') == '' ? 0 : $request->input('harga_minimal');
        $hargaMaximal = $request->input('harga_maksimal') == '' ? 0 : $request->input('harga_maksimal');
        $sortAZHarga = $request->input('radioButtonSort') == '' ? '' : $request->input('radioButtonSort');
        $keyword = $request->search == '' ? '' : $request->search;

        $UrlParam = '?';

        if ($keyword != '') {
            $UrlParam .= 'like[0]=nama_penginapan,' . $keyword . '&like[1]=deskripsi_kuliner,' . $keyword;
        }

        if ($hargaMaximal != 0 && $hargaMinimal != 0) {
            $UrlParam .= '&between=harga_penginapan,' . $hargaMinimal . ',' . $hargaMaximal;
        } elseif ($hargaMaximal == 0 && $hargaMinimal == 0) {
        } elseif ($hargaMinimal == 0) {
            $UrlParam .= '&less_or_equal=harga_penginapan,' . $hargaMaximal;
        } elseif ($hargaMaximal == 0) {
            $UrlParam .= '&greater_or_equal=harga_penginapan,' . $hargaMinimal;
        }

        if ($sortAZHarga == "asc") {
            $UrlParam .= '&sort=nama_penginapan,asc';
        } elseif ($sortAZHarga == "desc") {
            $UrlParam .= '&sort=nama_penginapan,desc';
        } elseif ($sortAZHarga == "harga_desc") {
            $UrlParam .= '&sort=harga_penginapan,desc';
        } elseif ($sortAZHarga == "harga_asc") {
            $UrlParam .= '&sort=harga_penginapan,asc';
        }

        return redirect('/penginapan' . $UrlParam);
    }

    public function gambar($id)
    {
        $penginapan = Penginapan::find($id);
        return view('penginapan.gambar', compact('penginapan'));
    }

    // public function tambahGambar($id, Request $request, $from = null)
    // {
    //     $originalName = $request->foto->getClientOriginalName();
    //     $uniqueId = time();
    //     $fileName = $uniqueId . '_' . $originalName;
    //     $request->foto->move(public_path('/images'), $fileName);
    //     $deskripsi = $request->input('deskripsi_gambar');

    //     GambarPenginapan::create([
    //         'penginapan' => $id,
    //         'gambar' => $fileName,
    //         'deskripsi' => $deskripsi
    //     ]);

    //     if ($from == 'detail_penginapan') {
    //         return redirect()->route('penginapan.show', $id);
    //     } else if ($from == null) {
    //         return redirect()->route('penginapan2');
    //     }
    // }
}