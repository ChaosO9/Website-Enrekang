@extends('layouts.app')

{{-- @section('title', 'Form Kuliner') --}}

@section('contents')
    <form action="{{ isset($kuliner) ? route('kuliner.form.update', $kuliner->id) : route('kuliner.form.simpan') }}"
        method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            {{ isset($kuliner) ? 'Form Edit Kuliner' : 'Form Tambah Kuliner' }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col form-group">
                                <label for="nama_kuliner">Nama Kuliner</label>
                                <input type="text" class="form-control" id="nama_kuliner" name="nama_kuliner"
                                    value="{{ isset($kuliner) ? $kuliner->nama_kuliner : '' }}">
                            </div>
                            <div class="col form-group">
                                <label for="alamat_kuliner">Alamat Kuliner</label>
                                <input type="text" class="form-control" id="alamat_kuliner" name="alamat_kuliner"
                                    value="{{ isset($kuliner) ? $kuliner->alamat_kuliner : '' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="harga_kuliner">Harga Kuliner</label>
                                <input type="number" class="form-control" id="harga_kuliner" name="harga_kuliner"
                                    value="{{ isset($kuliner) ? $kuliner->harga_kuliner : '' }}">
                            </div>
                            <div class="col form-group">
                                <label for="foto_kuliner">Foto Kuliner</label>
                                <input type="file" class="form-control" id="foto" name="foto"
                                    value="{{ isset($kuliner) ? $kuliner->foto_kuliner : '' }}">
                            </div>
                        </div>
                        <div class="mt-3 form-group">
                            <div class="form-group">
                                <label for="deskripsi_kuliner">Deskripsi Kuliner</label>
                                <textarea type="text" class="form-control" id="deskripsi_kuliner" name="deskripsi_kuliner"
                                    value="{{ isset($kuliner) ? $kuliner->deskripsi_kuliner : '' }}"></textarea>
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
