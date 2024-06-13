@extends('layouts.app')

{{-- @section('title', 'Form Penginapan') --}}

@section('contents')
    <form action="{{ route('edit.gambar.simpan', ['id' => $gambar->id, 'jenisDestinasi' => 'Kuliner']) }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            Edit Gambar untuk Galeri Kuliner "{{ $kuliner->nama_kuliner }}"</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">File Gambar</label>
                                <input class="form-control" type="file" id="imageFile" name="foto">
                            </div>
                            <div class="col form-group">
                                <label for="nama_penginapan">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi_gambar" name="deskripsi_gambar"
                                    value="{{ $gambar->deskripsi }}">
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
