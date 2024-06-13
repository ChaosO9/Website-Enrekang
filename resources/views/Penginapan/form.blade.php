@extends('layouts.app')

{{-- @section('title', 'Form Penginapan') --}}

@section('contents')
    <form
        action="{{ isset($penginapan) ? route('penginapan.form.update', $penginapan->id) : route('penginapan.form.simpan') }}"
        method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            {{ isset($penginapan) ? 'Form Edit penginapan' : 'Form Tambah penginapan' }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col form-group">
                                <label for="nama_penginapan">Nama penginapan</label>
                                <input type="text" class="form-control" id="nama_penginapan" name="nama_penginapan"
                                    value="{{ isset($penginapan) ? $penginapan->nama_penginapan : '' }}">
                            </div>
                            <div class="col form-group">
                                <label for="alamat_penginapan">Alamat penginapan</label>
                                <input type="text" class="form-control" id="alamat_penginapan" name="alamat_penginapan"
                                    value="{{ isset($penginapan) ? $penginapan->alamat_penginapan : '' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="harga_tiket">Harga Penginapan</label>
                                <input type="number" class="form-control" id="harga_tiket" name="harga_penginapan"
                                    value="{{ isset($penginapan) ? $penginapan->harga_penginapan : '' }}">
                            </div>
                            <div class="col form-group">
                                <label for="maps">Maps</label>
                                <input type="text" class="form-control" id="maps" name="maps"
                                    value="{{ isset($penginapan) ? $penginapan->maps : '' }}">
                            </div>
                        </div>
                        <label for="foto_penginapan">Foto penginapan</label>
                        <input type="file" class="form-control" id="foto" name="foto"
                            value="{{ isset($penginapan) ? $penginapan->foto_penginapan : '' }}">
                        <div class="mt-3 form-group">
                            <div class="form-group">
                                <label for="deskripsi_penginapan">Deskripsi penginapan</label>
                                <textarea type="text" class="form-control" id="deskripsi_penginapan" name="deskripsi_penginapan" value="">{{ isset($penginapan) ? $penginapan->deskripsi_penginapan : '' }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="formFile" class="form-label">Fasilitas</label>
                                {{-- <input class="form-control" type="file" id="formFile" name="foto"
                                    value="{{ isset($wisata) ? $wisata->foto_wisata : '' }}"> --}}
                                @foreach ($fasilitas as $fasil)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value={{ $fasil->id }}
                                            name="fasilitas[]" id={{ $fasil->id }}
                                            {{ isset($penginapan) ? (in_array($fasil->id, $fasilitas_penginapan) ? 'checked' : '') : '' }}>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            {{ $fasil->nama }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col form-group">
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
