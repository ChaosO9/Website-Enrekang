@extends('layouts.app')

{{-- @section('title', 'Form Saran') --}}

@section('contents')
    <form action="{{ isset($saran) ? route('saran.form.update', $saran->id) : route('saran.form.simpan') }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            {{ isset($saran) ? 'Form Edit saran' : 'Form Tambah saran' }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_saran">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                value="{{ isset($saran) ? $saran->nama : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ isset($saran) ? $saran->email : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="telepon">No Telepon</label>
                            <input type="number" class="form-control" id="telepon" name="telepon"
                                value="{{ isset($saran) ? $saran->telepon : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="saran">Saran</label>
                            <input type="text" class="form-control" id="saran" name="saran"
                                value="{{ isset($saran) ? $saran->saran : '' }}">
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
