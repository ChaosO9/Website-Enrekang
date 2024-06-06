@extends('layouts.app')

{{-- @section('title', 'Form Penginapan') --}}

@section('contents')
    <form action="{{ route('simpan.kategori') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            Tambah Kategori</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col form-group">
                                <label for="nama_penginapan">Nama Kategori</label>
                                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
    </form>
@endsection
