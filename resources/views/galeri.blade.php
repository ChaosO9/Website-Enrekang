@extends('layouts.app')

{{-- @section('title', 'Data Wisata') --}}


@section('contents')
    <form action="{{ route('galeri') }}" class="row pb-3">
        <div class="col-auto">
            <div class="btn-group pe-2">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa-solid fa-location-dot"></i> Lokasi/Kegiatan
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <h6 class="dropdown-header">Wisata</h6>
                    </li>
                    @if (@isset($wisata))
                        @foreach ($wisata as $wisataa)
                            <li>
                                <div class="dropdown-item" href="#">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="wisataRadioButton"
                                            id="wisataRadioButton{{ $wisataa->id }}" value="{{ $wisataa->id }}">
                                        <label class="form-check-label" for="wisataRadioButton{{ $wisataa->id }}">
                                            {{ $wisataa->nama_wisata }}
                                        </label>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @endif
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <h6 class="dropdown-header">Kuliner</h6>
                    </li>
                    @if (isset($kuliner))
                        @foreach ($kuliner as $kulinera)
                            <li>
                                <div class="dropdown-item" href="#">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kulinerRadioButton"
                                            id="kulinerRadioButton{{ $kulinera->id }}" value="{{ $kulinera->id }}">
                                        <label class="form-check-label" for="kulinerRadioButton{{ $kulinera->id }}">
                                            {{ $kulinera->nama_kuliner }}
                                        </label>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @endif
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <h6 class="dropdown-header">Penginapan</h6>
                    </li>
                    @if (isset($penginapan))
                        @foreach ($penginapan as $penginapana)
                            <li>
                                <div class="dropdown-item" href="#">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="penginapanRadioButton"
                                            id="penginapanRadioButton{{ $penginapana->id }}"
                                            value="{{ $penginapana->id }}">
                                        <label class="form-check-label" for="penginapanRadioButton{{ $penginapana->id }}">
                                            {{ $penginapana->nama_penginapan }}
                                        </label>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @endif
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <h6 class="dropdown-header">Event</h6>
                    </li>
                    @if (isset($event))
                        @foreach ($event as $eventa)
                            <li>
                                <div class="dropdown-item" href="#">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="eventRadioButton"
                                            id="eventRadioButton{{ $eventa->id }}" value="{{ $eventa->id }}">
                                        <label class="form-check-label" for="eventRadioButton{{ $eventa->id }}">
                                            {{ $eventa->nama_event }}
                                        </label>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i>
                Cari</button>
        </div>
    </form>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Galeri {{ isset($jenisDestinasi) ? $jenisDestinasi : '' }}
                {{ isset($namaDestinasi) ? '"' . $namaDestinasi . '"' : '' }}</h6>
        </div>
        <div class="card-body">
            @if (isset($jenisDestinasi))
                <div class="row">
                    <div class="col">
                        <a href="{{ route(Str::lower($jenisDestinasi) . '.gambar', ['id' => $destinasiId]) }}"
                            class="btn btn-primary mb-3">+
                            Tambah
                            Gambar</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto </th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($no = 1)

                            {{-- //Search

                        if(isset($post['Search'])){
                            $keywords = $
                        } --}}

                            @foreach ($galeri as $row)
                                <tr>
                                    <th>{{ $no++ }}</th>
                                    <td>
                                        <img src="{{ asset('images/' . $row->gambar) }}" alt=""
                                            style="height: 150px;">
                                    </td>
                                    <td>{{ $row->deskripsi }}</td>
                                    <td>
                                        <a href="{{ route('edit.gambar', ['id' => $row->id, 'jenisDestinasi' => $jenisDestinasi]) }}"
                                            class="btn btn-warning"> <i class="fas fa-edit"></i></a>
                                        <a href="{{ route('hapus.gambar', ['id' => $row->id, 'jenisDestinasi' => $jenisDestinasi]) }}"
                                            class="btn btn-danger"> <i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>

    {{-- datatables --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css">

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.js"></script>

    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <script>
        $('#example').DataTable();
    </script>
    {{-- end datatables --}}
@endsection
