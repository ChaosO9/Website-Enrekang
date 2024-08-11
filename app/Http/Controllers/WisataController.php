<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\FasilitasWisata;
use App\Models\Kategori;
use App\Models\ReviewWisata;
use App\Models\User;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class WisataController extends Controller
{
    public function index()
    {
        $wisata = Wisata::get();

        return view('wisata.index', ['data' => $wisata]);
    }

    public function index2()
    {
        $wisata = DB::table('wisata')->get();

        $wisataWithFasilitas = $wisata->map(function ($item) {
            $wisata = Wisata::find($item->id);
            $item->fasilitas = $wisata->fasilitas()->pluck('nama')->all();
            return $item;
        });

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
            $manager = new ImageManager(new Driver());
            $imageName = uniqid('', true) . '_' . time() . '.webp';
            $image = $manager->read($request->foto)->toWebp(90);
            $image->save(base_path('public/images/wisata/' . $imageName));
            $dataGambar = ['foto_wisata' => $imageName];
        } else {
            $dataGambar = ['foto_wisata' => 'no-image.webp'];
        }

        $data = [
            'nama_wisata' => $request->nama_wisata,
            'alamat_wisata' => $request->alamat_wisata,
            'harga_tiket' => $request->harga_tiket,
            'id_kategori' => $request->kategori,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'deskripsi_wisata' => $request->deskripsi_wisata,
        ];

        $data = array_merge($data, $dataGambar);

        $wisata = Wisata::create($data);

        $fasilitas_wisata = $request->input('fasilitas');

        if (isset($fasilitas_wisata)) {
            for ($i = 0; $i < count($fasilitas_wisata); $i++) {
                FasilitasWisata::create([
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
        $fasilitas_wisata2 = FasilitasWisata::where('wisata', $id)->get();
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
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'fasilitas' => $request->fasilitas,
            'deskripsi_wisata' => $request->deskripsi_wisata,
        ];

        if ($request->hasFile('foto')) {
            $manager = new ImageManager(new Driver());
            $imageName = uniqid('', true) . '_' . time() . '.webp';
            $image = $manager->read($request->foto)->toWebp(90);
            $image->save(base_path('public/images/wisata/' . $imageName));
            Storage::delete("/images/wisata/" . $wisata->foto_wisata);
            $data['foto_wisata'] = $imageName;
        } else {
            isset($wisata->foto_wisata) ? $data['foto_wisata'] = $wisata->foto_wisata : $data['foto_wisata'] = 'no-image.webp';
        }

        $wisata->update($data);

        FasilitasWisata::where('wisata', $id)->delete();

        $fasilitas_wisata = $request->input('fasilitas');

        if (isset($fasilitas_wisata)) {
            for ($i = 0; $i < count($fasilitas_wisata); $i++) {
                FasilitasWisata::create([
                    'wisata' => $wisata->id,
                    'fasilitas' => $fasilitas_wisata[$i],
                ]);
            }
        }

        return redirect()->route('wisata2');
    }

    public function hapus($id)
    {
        $wisata = Wisata::find($id);
        Storage::delete("/images/wisata/" . $wisata->foto_wisata);
        $wisata->delete();

        return redirect()->route('wisata2');
    }

    public function nav(Request $request)
    {
        $kategori = Kategori::all();
        $keyword = $request->search;
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
        $request->foto->move(public_path('/images/wisata'), $fileName);
        $deskripsi = $request->input('deskripsi_gambar');

        ReviewWisata::create([
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
        $ikon_fasilitas = [
            'Area Parkir' => '<i class="fa-solid fa-square-parking"></i>',
            'Area Camping' => '<i class="fa-solid fa-tents"></i>',
            'Balai Pertemuan' => '<i class="fa-solid fa-landmark"></i>',
            'Cafetaria' => '<i class="fa-solid fa-mug-saucer"></i>',
            'Jungle Tracking' => '<i class="fa-solid fa-person-hiking"></i>',
            'Kios Souvenir' => '<i class="fa-solid fa-shop"></i>',
            'Kolam Renang' => '<i class="fa-solid fa-person-swimming"></i>',
            'Mushollah' => '<i class="fa-solid fa-mosque"></i>',
            'Outbound' => '<i class="fa-solid fa-tree"></i>',
            'Ramah Difable' => '<i class="fa-solid fa-wheelchair"></i>',
            'Spot Foto' => '<i class="fa-solid fa-camera"></i>',
            'Selfie Area' => '<i class="fa-solid fa-camera-retro"></i>',
            'Tempat Makan' => '<i class="fa-solid fa-utensils"></i>',
            'Waterboom' => '<i class="fa-solid fa-water-ladder"></i>',
            'Wifi' => '<i class="fa-solid fa-wifi"></i>',
        ];
        $wisata = Wisata::find($id);
        $fasilitas = $wisata->fasilitas()->pluck('nama')->all();
        $reviews = $wisata->review;

        // $reviews = ReviewWisata::where('wisata', $wisata->id)->get();
        $semua_reviews = $wisata->review()->with('user');
        $reviews = $semua_reviews->paginate(2)->map(function ($review) {
            $review->username = $review->user->name;
            $review->user_created_at = $review->user->created_at;
            return $review;
        });
        $jumlah_ulasan = $wisata->review()->count();
        if ($jumlah_ulasan > 0) {
            $jumlah_rating = $wisata->review()->sum('rating_bintang');
            $rating_rata2 = intval(number_format($jumlah_rating / $jumlah_ulasan));
        } else {
            $rating_rata2 = 0;
        }

        // $reviews = ReviewWisata::where('wisata', $wisata->id)->paginate(1);
        // $users = User::paginate(3);

        return view('details_wisata', compact('wisata', 'reviews', 'semua_reviews', 'fasilitas', 'ikon_fasilitas', 'rating_rata2'));
    }
}
