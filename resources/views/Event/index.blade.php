@extends('layouts.app')

{{-- @section('title', 'Data Event') --}}

@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Event</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div>
                        <a href="{{ route('event.form') }}" class="btn btn-primary mb-3">+ Tambah Event</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama </th>
                            <th>Tempat </th>
                            <th>Foto </th>
                            <th>Tanggal Mulai </th>
                            <th>Tanggal Selesai </th>
                            <th>Latitude </th>
                            <th>Longitude </th>
                            <th>Deskripsi </th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($data as $row)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $row->nama_event }}</td>
                                <td>{{ $row->tempat_event }}</td>
                                <td>
                                    <img src="{{ asset('images/' . $row->foto_event) }}" alt=""
                                        style="width: 100px;">
                                </td>
                                <td>{{ date('d-m-Y', strtotime($row->tanggal_pelaksanaan)) }}</td>
                                <td>{{ date('d-m-Y', strtotime($row->tanggal_selesai)) }}</td>
                                <td>{{ $row->latitude }}</td>
                                <td>{{ $row->longitude }}</td>
                                <td>
                                    <a href="{{ route('event.edit', $row->id) }}" class="btn btn-warning"
                                        style="color: rgb(255, 255, 255)"> <i class="fas fa-edit"></i></a>
                                    <a href="{{ route('event.gambar', $row->id) }}" class="btn btn-secondary"> <i
                                            class="fa-regular fa-image"></i></i></a>
                                    <a href="{{ route('event.hapus', $row->id) }}" class="btn btn-danger"> <i
                                            class="fas fa-trash"></i></a>
                                </td>
                                <td>{{ $row->deskripsi_event }}</td>
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
