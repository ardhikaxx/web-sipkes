@extends('layouts.app')

@section('title', 'Poli Gigi - SIPKES')

@section('content')
    <link href="{{ asset('css/poli-gigi.css') }}" rel="stylesheet">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card p-4 shadow-sm">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h1 class="mb-0">Poli Gigi</h1>
                        <div class="d-flex align-items-center">
                            <input type="text" class="form-control me-2" placeholder="Cari Data Pasien"
                                style="width: 300px;">
                            <button class="btn btn-primary">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="bg-light">
                                <tr>
                                    <th>No. Antrian</th>
                                    <th>No. RM</th>
                                    <th>Nama</th>
                                    <th>Tanggal Periksa</th>
                                    <th>Unit Layanan</th>
                                    <th>Dokter</th>
                                    <th>Jenis Pasien</th>
                                    <th>Status</th>
                                    <th>Proses</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 1; $i <= 10; $i++)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>00000{{ $i }}</td>
                                        <td>{{ ['Jaja', 'Lala', 'Popo', 'Putri', 'Riki', 'Bila', 'Moon', 'Wan', 'Lin', 'Yan'][$i - 1] }}
                                        </td>
                                        <td>{{ date('d-m-Y', strtotime('2025-05-0' . $i)) }}</td>
                                        <td>Gigi</td>
                                        <td>dr. x</td>
                                        <td>{{ $i <= 5 ? 'Umum' : 'BPJS' }}</td>
                                        <td>
                                            @if ($i <= 5)
                                                <span class="text-success">Dilayani</span>
                                            @else
                                                <span class="text-danger">Belum Dilayani</span>
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Pilih</button>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
