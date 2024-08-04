<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\GambarEvent;
use App\Models\GambarKuliner;
use App\Models\GambarLokasi;
use App\Models\GambarPenginapan;
use App\Models\Kuliner;
use App\Models\Penginapan;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class GaleriController extends Controller
{
    public function galeri(Request $request)
    {
        $wisata = Wisata::all();
        $kuliner = Kuliner::all();
        $penginapan = Penginapan::all();
        $event = Event::all();
        if (null !== $request->input('wisataRadioButton')) {
            $destinasiId = $wisata->find($request->input('wisataRadioButton'));
            $galeri = $destinasiId->gambar;
            $jenisDestinasi = "Wisata";
            $namaDestinasi = $destinasiId->nama_wisata;
            return view('galeri', compact('wisata', 'destinasiId', 'galeri', 'jenisDestinasi', 'namaDestinasi', 'kuliner', 'penginapan', 'event'));
        } else if (null !== $request->input('kulinerRadioButton')) {
            $destinasiId = $kuliner->find($request->input('kulinerRadioButton'));
            $galeri = $destinasiId->gambar;
            $jenisDestinasi = "Kuliner";
            $namaDestinasi = $destinasiId->nama_kuliner;
            return view('galeri', compact('wisata', 'destinasiId', 'galeri', 'jenisDestinasi', 'namaDestinasi', 'kuliner', 'penginapan', 'event'));
        } else if (null !== $request->input('penginapanRadioButton')) {
            $destinasiId = $penginapan->find($request->input('penginapanRadioButton'));
            $galeri = $destinasiId->gambar;
            $jenisDestinasi = "Penginapan";
            $namaDestinasi = $destinasiId->nama_penginapan;
            return view('galeri', compact('wisata', 'destinasiId', 'galeri', 'jenisDestinasi', 'namaDestinasi', 'kuliner', 'penginapan', 'event'));
        } else if (null !== $request->input('eventRadioButton')) {
            $destinasiId = $event->find($request->input('eventRadioButton'));
            $galeri = $destinasiId->gambar;
            $jenisDestinasi = "Event";
            $namaDestinasi = $destinasiId->nama_event;
            return view('galeri', compact('wisata', 'destinasiId', 'galeri', 'jenisDestinasi', 'namaDestinasi', 'kuliner', 'penginapan', 'event'));
        } else {
            return view('galeri', compact('wisata', 'kuliner', 'penginapan', 'event'));
        }
    }

    public function editGambar($id, Request $request)
    {
        $jenisDestinasi = $request->jenisDestinasi;
        if ($jenisDestinasi == 'Wisata') {
            $gambar = GambarLokasi::find($id);
            $wisata = Wisata::find($gambar->wisata);
            return view('wisata.edit-gambar', compact('gambar', 'wisata'));
        } else if ($jenisDestinasi == 'Kuliner') {
            $gambar = GambarKuliner::find($id);
            $kuliner = Kuliner::find($gambar->kuliner);
            return view('kuliner.edit-gambar', compact('gambar', 'kuliner'));
        } else if ($jenisDestinasi == 'Penginapan') {
            $gambar = GambarPenginapan::find($id);
            $penginapan = Penginapan::find($gambar->penginapan);
            return view('Penginapan.edit-gambar', compact('gambar', 'penginapan'));
        } else if ($jenisDestinasi == 'Event') {
            $gambar = GambarEvent::find($id);
            $event = Event::find($gambar->penginapan);
            return view('Event.edit-gambar', compact('gambar', 'event'));
        }
    }

    public function editGambarSimpan($id, Request $request)
    {
        $jenisDestinasi = $request->jenisDestinasi;

        if ($jenisDestinasi == 'Wisata') {
            $gambar = GambarLokasi::find($id);
            $param = ['wisataRadioButton' => $gambar->wisata];
        } else if ($jenisDestinasi == 'Kuliner') {
            $gambar = GambarKuliner::find($id);
            $param = ['kulinerRadioButton' => $gambar->kuliner];
        } else if ($jenisDestinasi == 'Penginapan') {
            $gambar = GambarPenginapan::find($id);
            $param = ['penginapanRadioButton' => $gambar->penginapan];
        } else if ($jenisDestinasi == 'Event') {
            $gambar = GambarEvent::find($id);
            $param = ['eventRadioButton' => $gambar->event];
        }

        if ($request->hasFile('foto')) {
            $manager = new ImageManager(new Driver());
            $imageName = uniqid('', true) . '_' . time() . '.webp';
            $image = $manager->read($request->foto)->toWebp(90);
            $image->save(base_path('public/images/' . strtolower($jenisDestinasi) . '/' . $imageName));
            Storage::delete("/images/" . strtolower($jenisDestinasi) . '/' . $gambar->gambar);
            $data['gambar'] = $imageName;
        } else {
            $data['gambar'] = $gambar->gambar;
        }

        $data['deskripsi'] = $request->input('deskripsi_gambar');

        $gambar->update($data);

        return redirect()->route('galeri', $param);
    }

    public function hapusGambar($id, Request $request)
    {
        $jenisDestinasi = $request->jenisDestinasi;

        if ($jenisDestinasi == 'Wisata') {
            $gambar = GambarLokasi::find($id);
            $param = ['wisataRadioButton' => $gambar->wisata];
        } else if ($jenisDestinasi == 'Kuliner') {
            $gambar = GambarKuliner::find($id);
            $param = ['kulinerRadioButton' => $gambar->kuliner];
        } else if ($jenisDestinasi == 'Penginapan') {
            $gambar = GambarPenginapan::find($id);
            $param = ['penginapanRadioButton' => $gambar->penginapan];
        } else if ($jenisDestinasi == 'Event') {
            $gambar = GambarEvent::find($id);
            $param = ['eventRadioButton' => $gambar->event];
        }

        Storage::delete("/images/" . strtolower($jenisDestinasi) . '/' . $gambar->gambar);
        $gambar->delete();
        return redirect()->route('galeri', $param);
    }
}
