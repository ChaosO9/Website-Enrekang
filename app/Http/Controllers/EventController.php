<?php

namespace App\Http\Controllers;

use App\Models\Event;
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
            'waktu_event' => $request->waktu_event,
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
            'waktu_event' => $request->waktu_event,
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

public function nav(Request $request){
        
    $keyword = $request->search;
    $data = Event::where('nama_event', 'like', '%'. $keyword. '%')->paginate(6);

    return view('eventWeb',compact('data'));
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

    //render view with event
    return view('details_event', compact('event'));
}
}
