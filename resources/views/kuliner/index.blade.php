@extends('layouts.app')

{{-- @section('title', 'Data Kuliner') --}}

@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kuliner</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <a href="{{ route('kuliner.form') }}" class="btn btn-primary mb-3">+ Tambah Kuliner</a>
                </div>
            </div>
            <div class="table-responsive">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Foto </th>
                            <th>Alamat </th>
                            <th>Harga Tiket</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)

                        {{-- //Search

                        if(isset($post['Search'])){
                            $keywords = $
                        } --}}


                        @foreach ($data as $row)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $row->nama_kuliner }}</td>
                                <td>
                                    <img src="{{ asset('images/' . $row->foto_kuliner) }}" alt=""
                                        style="width: 100px;">
                                </td>
                                <td>{{ $row->alamat_kuliner }}</td>
                                <td>{{ $row->harga_kuliner }}</td>
                                <td>
                                    <a href="{{ route('kuliner.edit', $row->id) }}" class="btn btn-warning"
                                        style="color: rgb(255, 255, 255)"> <i class="fas fa-edit"></i></a>
                                    <a href="{{ route('kuliner.gambar', $row->id) }}" class="btn btn-secondary"> <i
                                            class="fa-regular fa-image"></i></i></a>
                                    <a href="{{ route('kuliner.hapus', $row->id) }}" class="btn btn-danger"> <i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- datatables --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css">

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.js"></script>

    <script>
        $('#example').DataTable();
    </script>
    {{-- end datatables --}}
@endsection
