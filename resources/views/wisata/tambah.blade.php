@extends('layouts.app')

{{-- @section('title', 'Form Wisata') --}}

@section('contents')
    <form action="{{ isset($wisata) ? route('wisata.tambah.update', $wisata->id) : route('wisata.tambah.simpan') }}"
        method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            {{ isset($wisata) ? 'Form Edit Wisata' : 'Form Tambah Wisata' }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col form-group">
                                <label for="nama_wisata">Nama Wisata</label>
                                <input type="text" class="form-control" id="nama_wisata" name="nama_wisata"
                                    placeholder="Masukkan nama wisata" required
                                    value="{{ isset($wisata) ? $wisata->nama_wisata : '' }}">
                            </div>
                            <div class="col form-group">
                                <label for="alamat_wisata">Alamat</label>
                                <input type="text" class="form-control" id="alamat_wisata" name="alamat_wisata"
                                    placeholder="Masukkan alamat" required
                                    value="{{ isset($wisata) ? $wisata->alamat_wisata : '' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="harga_tiket">Harga Tiket</label>
                                <input type="number" class="form-control" id="harga_tiket" name="harga_tiket"
                                    placeholder="Masukkan harga tiket" required
                                    value="{{ isset($wisata) ? $wisata->harga_tiket : '' }}">
                            </div>
                            <div class="col form-group">
                                <label for="maps">Maps</label>
                                <input type="text" class="form-control" id="maps" name="maps"
                                    placeholder="Masukkan maps" required value="{{ isset($wisata) ? $wisata->maps : '' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label>Kategori</label>
                                <select id="id_kategori" class="form-control" name="kategori">
                                    <option value="">Pilih kategori</option>
                                    @foreach ($kategori as $kategori)
                                        <option value="{{ $kategori->nama_kategori }}"
                                            {{ isset($wisata) ? ($kategori->nama_kategori == $wisata->id_kategori ? 'selected' : '') : '' }}>
                                            {{ $kategori->nama_kategori }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col form-group">
                                <label for="tanggal_upload">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal_upload" name="tanggal_upload"
                                    required value="{{ isset($wisata) ? $wisata->tanggal_upload : '' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="formFile" class="form-label">Foto</label>
                                <input class="form-control" type="file" id="formFile" name="foto"
                                    value="{{ isset($wisata) ? $wisata->foto_wisata : '' }}">
                            </div>
                            <div class="col form-group">
                                <label for="deskripsi_wisata">Deskripsi</label>
                                <textarea type="text" class="form-control" id="deskripsi_wisata" name="deskripsi_wisata"
                                    placeholder="Masukkan deskripsi" required>{{ isset($wisata) ? old('deskripsi_wisata', $wisata->deskripsi_wisata) : '' }}</textarea>
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
                                            {{ isset($wisata) ? (in_array($fasil->id, $fasilitas_wisata) ? 'checked' : '') : '' }}>
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
