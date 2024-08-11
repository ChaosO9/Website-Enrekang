@extends('layouts.app')

{{-- @section('title', 'Form Event') --}}

@section('contents')
    <form action="{{ isset($event) ? route('event.form.update', $event->id) : route('event.form.simpan') }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            {{ isset($event) ? 'Form Edit Event' : 'Form Tambah Event' }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col form-group">
                                <label for="nama_event">Nama</label>
                                <input type="text" class="form-control" id="nama_event" name="nama_event"
                                    placeholder="Masukkan nama" required
                                    value="{{ isset($event) ? $event->nama_event : '' }}">
                            </div>
                            <div class="col form-group">
                                <label for="tempat_event">Tempat</label>
                                <input type="text" class="form-control" id="tempat_event" name="tempat_event"
                                    placeholder="Masukkan tempat" required
                                    value="{{ isset($event) ? $event->tempat_event : '' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="tanggal_pelaksanaan">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="tanggal_pelaksanaan"
                                    name="tanggal_pelaksanaan"
                                    value="{{ isset($event) ? $event->tanggal_pelaksanaan : '' }}">
                            </div>
                            <div class="col form-group">
                                <label for="tanggal_selesai">Tanggal Selesai</label>
                                <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai"
                                    value="{{ isset($event) ? $event->tanggal_selesai : '' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="latitude">Latitude</label>
                                <input type="text" class="form-control" id="latitude" name="latitude"
                                    placeholder="Masukkan titik latitude" required
                                    value="{{ isset($event) ? $event->latitude : '' }}">
                            </div>
                            <div class="col form-group">
                                <label for="longitude">Longitude</label>
                                <input type="text" class="form-control" id="longitude" name="longitude"
                                    placeholder="Masukkan titik longitude" required
                                    value="{{ isset($event) ? $event->longitude : '' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="foto_event">Foto</label>
                                <input type="file" class="form-control" id="foto" name="foto"
                                    value="{{ isset($event) ? $event->foto_event : '' }}">
                            </div>
                            <div class="col form-group">
                                <label for="deskripsi_event">Deskripsi</label>
                                <textarea type="text" class="form-control" id="deskripsi_event" name="deskripsi_event"
                                    placeholder="Masukkan deskripsi" required value="">{{ isset($event) ? $event->deskripsi_event : '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
