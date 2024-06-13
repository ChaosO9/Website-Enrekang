<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\GambarEvent;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::get();

        return view('event.index', ['data' => $event]);
    }
    public function index2()
    {
        $event = Event::get();

        return view('event.index', ['data' => $event]);
    }
    public function tambah()
    {
        return view('event.form');
    }

    public function simpan(Request $request)
    {

        $imageName = $request->foto->getClientOriginalName();
        $request->foto->move(public_path('/images'), $imageName);

        $data = [
            'nama_event' => $request->nama_event,
            'foto_event' => $imageName,
            'tempat_event' => $request->tempat_event,
            'tanggal_pelaksanaan' => $request->tanggal_pelaksanaan,
            'tanggal_selesai' => $request->tanggal_selesai,
            'deskripsi_event' => $request->deskripsi_event,
        ];

        Event::create($data);

        return redirect()->route('event2');
    }

    public function edit($id)
    {
        $event = Event::where('id', $id)->first();

        return view('event.form', ['event' => $event]);
    }

    public function update($id, Request $request)
    {
        $imageName = $request->foto->getClientOriginalName();
        $request->foto->move(public_path('/images'), $imageName);

        $data = [
            'nama_event' => $request->nama_event,
            'foto_event' => $imageName,
            'tempat_event' => $request->tempat_event,
            'tanggal_pelaksanaan' => $request->tanggal_pelaksanaan,
            'tanggal_selesai' => $request->tanggal_selesai,
            'deskripsi_event' => $request->deskripsi_event,
        ];

        Event::find($id)->update($data);

        return redirect()->route('event2');
    }

    public function hapus($id)
    {
        Event::find($id)->delete();

        return redirect()->route('event');
    }

    public function nav(Request $request)
    {

        $keyword = $request->search;
        // $data = Event::where('nama_event', 'like', '%' . $keyword . '%')->paginate(6);
        $data = Event::filter()->paginate(6);

        return view('eventWeb', compact('data'));
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show($id)
    {
        //get event by ID
        $event = Event::find($id);
        $galeri = $event->gambar;

        //render view with event
        return view('details_event', compact('event', 'galeri'));
    }

    public function urlParamBuilder(Request $request)
    {
        $request_filter_status = $request->input('StatusEvent');
        $sortAZHarga = $request->input('radioButtonSort') == '' ? '' : $request->input('radioButtonSort');
        $keyword = $request->search == '' ? '' : $request->search;

        $UrlParam = '?';

        if (isset($request_filter_status)) {
            foreach ($request_filter_status as $filter) {
                switch ($filter) {
                    case 'belum_mulai':
                        $UrlParam .= '&greater=tanggal_pelaksanaan,' . Carbon::today();
                        break;
                    case 'berlangsung':
                        $UrlParam .= '&less_or_equal=tanggal_pelaksanaan,' . Carbon::today();
                        $UrlParam .= '&greater_or_equal=tanggal_selesai,' . Carbon::today();
                        break;
                    case 'telah_selesai':
                        $UrlParam .= '&less=tanggal_selesai,' . Carbon::today();
                        break;
                }
            }
        }

        if ($keyword != '') {
            $UrlParam .= 'like[0]=nama_event,' . $keyword . '&like[1]=deskripsi_event,' . $keyword;
        }

        if ($sortAZHarga == "asc") {
            $UrlParam .= '&sort=nama_event,asc';
        } elseif ($sortAZHarga == "desc") {
            $UrlParam .= '&sort=nama_event,desc';
        }

        return redirect('/event/tampil' . $UrlParam);
    }

    public function gambar($id)
    {
        $event = Event::find($id);
        return view('event.gambar', compact('event'));
    }

    public function tambahGambar($id, Request $request, $from = null)
    {
        $originalName = $request->foto->getClientOriginalName();
        $uniqueId = time();
        $fileName = $uniqueId . '_' . $originalName;
        $request->foto->move(public_path('/images'), $fileName);
        $deskripsi = $request->input('deskripsi_gambar');

        GambarEvent::create([
            'event' => $id,
            'gambar' => $fileName,
            'deskripsi' => $deskripsi
        ]);

        if ($from == 'detail_event') {
            return redirect()->route('event.show', $id);
        } else if ($from == null) {
            return redirect()->route('event2');
        }
    }
}
