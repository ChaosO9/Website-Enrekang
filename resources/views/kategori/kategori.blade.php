@extends('layouts.app')
@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kategori</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div>
                        <a href="{{ route('kategori.form') }}" class="btn btn-primary mb-3">+ Tambah kategori</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            {{-- <th>No</th> --}}
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($kategori as $row)
                            <tr>
                                {{-- <th>{{ $no++ }}</th> --}}
                                <td>{{ $row->nama_kategori }}</td>
                                <td>
                                    <a href="{{ route('kategori.hapus', $row->id) }}" class="btn btn-danger"
                                        onsubmit="return confirm('Yakin ingin menghapus data {{ $row->nama_kategori }} ?')">
                                        <i class="fas fa-trash"></i></a>
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
