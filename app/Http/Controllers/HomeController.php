<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use App\Models\Wisata;
use App\Models\Penginapan;
use App\Models\Event;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $data = Penginapan::all();
        $wisata = Wisata::filter()->get();
        $kuliner = Kuliner::all();
        $event = Event::all();
        $kategori = Kategori::all();

        return view('home', compact('data', 'wisata', 'kuliner', 'event', 'kategori'));
    }

    public function urlParamBuilder(Request $request)
    {
        $request_filter_kategori = $request->input('kategori');
        $hargaMinimal = $request->input('harga_minimal') == '' ? 0 : $request->input('harga_minimal');
        $hargaMaximal = $request->input('harga_maksimal') == '' ? 0 : $request->input('harga_maksimal');
        $sortAZ = $request->input('radioButtonAZ') == '' ? '' : $request->input('radioButtonAZ');
        $sortHarga = $request->input('radioButtonHarga') == '' ? '' : $request->input('radioButtonHarga');

        $UrlParam = '?';

        if (isset($request_filter_kategori)) {
            $UrlParam .= 'in=id_kategori,';
            for ($i = 0; $i < count($request_filter_kategori); $i++) {
                $i + 1 < count($request_filter_kategori) ? ($UrlParam .= $request_filter_kategori[$i] . ',') : ($UrlParam .= $request_filter_kategori[$i]);
            }
        }

        if ($hargaMaximal != 0 && $hargaMinimal != 0) {
            $UrlParam .= '&between=harga_tiket,' . $hargaMinimal . ',' . $hargaMaximal;
        } elseif ($hargaMaximal == 0 && $hargaMinimal == 0) {
        } elseif ($hargaMinimal == 0) {
            $UrlParam .= '&less_or_equal=harga_tiket,' . $hargaMaximal;
        } elseif ($hargaMaximal == 0) {
            $UrlParam .= '&greater_or_equal=harga_tiket,' . $hargaMinimal;
        }

        if ($sortAZ != '' && $sortHarga != '') {
            $UrlParam .= '&sort[0]=nama_wisata,' . $sortAZ . '&sort[1]=harga_tiket,' . $sortHarga;
        } elseif ($sortAZ == '' && $sortHarga == '') {
            $UrlParam = $UrlParam;
        } elseif ($sortAZ == '') {
            $UrlParam .= '&sort=harga_tiket,' . $sortHarga;
        } elseif ($sortHarga == '') {
            $UrlParam .= '&sort=nama_wisata,' . $sortAZ;
        }

        return redirect('/home' . $UrlParam . '#portfolio');
    }

    // public function wisata(){
    //     $wisata = Wisata::all();

    // return view('home',compact('wisata'));
    // }
}
