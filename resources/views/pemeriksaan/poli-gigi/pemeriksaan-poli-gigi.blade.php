@extends('layouts.app')

@section('title', 'Pemeriksaan Poli Gigi - SIPKES')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/pemeriksaan-poli-gigi.css') }}">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card p-4 shadow-sm">
                    <h1 class="mb-4">Pemeriksaan Poli Gigi</h1>

                    <div class="stepper-wrapper mb-5">
                        <div class="stepper" id="poliGigiStepper">
                            <ol class="stepper-steps">
                                <li class="stepper-step active" data-step="1">
                                    <button type="button" class="stepper-step-button active" data-bs-toggle="step">
                                        <span class="stepper-step-indicator">1</span>
                                        <span class="stepper-step-label">Pendaftaran</span>
                                    </button>
                                </li>
                                <li class="stepper-step active" data-step="2">
                                    <button type="button" class="stepper-step-button active" data-bs-toggle="step">
                                        <span class="stepper-step-indicator">2</span>
                                        <span class="stepper-step-label">Pemeriksaan Awal</span>
                                    </button>
                                </li>
                                <li class="stepper-step active" data-step="3">
                                    <button type="button" class="stepper-step-button active" data-bs-toggle="step">
                                        <span class="stepper-step-indicator">3</span>
                                        <span class="stepper-step-label">Pemeriksaan</span>
                                    </button>
                                </li>
                                <li class="stepper-step" data-step="4">
                                    <button type="button" class="stepper-step-button" data-bs-toggle="step">
                                        <span class="stepper-step-indicator">4</span>
                                        <span class="stepper-step-label">Farmasi</span>
                                    </button>
                                </li>
                                <li class="stepper-step" data-step="5">
                                    <button type="button" class="stepper-step-button" data-bs-toggle="step">
                                        <span class="stepper-step-indicator">5</span>
                                        <span class="stepper-step-label">Pembayaran</span>
                                    </button>
                                </li>
                            </ol>
                        </div>
                    </div>

                    <form action="#" method="POST">
                        @csrf

                        <!-- Bagian 1: Data Pemeriksaan -->
                        <h5 class="mb-3">Data Pemeriksaan</h5>

                        <div class="d-flex gap-2 mb-3">
                            <button type="button" class="btn btn-primary">Surat Keterangan</button>
                            <button type="button" class="btn btn-outline-primary">Odontogram</button>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="no_antrian" class="form-label">No. Antrian</label>
                                    <input type="text" class="form-control" id="no_antrian" placeholder="Masukkan no. antrian">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="nama_pasien" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama_pasien" placeholder="Masukkan nama pasien">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="no_rm" class="form-label">No. RM</label>
                                    <input type="text" class="form-control" id="no_rm" placeholder="Masukkan no. RM">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="tanggal_periksa" class="form-label">Tanggal Periksa</label>
                                    <input type="text" class="form-control" id="tanggal_periksa" placeholder="dd/mm/yyyy"
                                        onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
                                </div>
                            </div>
                        </div>

                        <!-- Bagian 2: Diagnosis dan ICD 10 -->
                        <div class="row g-4 mb-4">
                            <div class="col-lg-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="card-title mb-3">Diagnosis</h6>
                                        <textarea class="form-control" id="diagnosis" rows="4" placeholder="Ketikkan Diagnosis"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="card-title mb-3">ICD 10</h6>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="icd10_search" placeholder="Ketik Kode atau Diagnosis">
                                            <button class="btn btn-outline-secondary" type="button">
                                                <i class="bi bi-search"></i>
                                            </button>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Nama ICD 10</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="2" class="text-center">Tidak Ada Data</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bagian 3: Subjek/Keluhan dan Objective -->
                        <div class="row g-4 mb-4">
                            <div class="col-lg-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="card-title mb-3">Subjek/Keluhan</h6>
                                        <textarea class="form-control" id="subjek_keluhan" rows="4" placeholder="Ketikkan Subjek/Keluhan"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="card-title mb-3">Objective</h6>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="tensi_darah_sistol" class="form-label">Tensi Darah*</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="tensi_darah_sistol" placeholder="Sistole">
                                                    <span class="input-group-text">/</span>
                                                    <input type="text" class="form-control" id="tensi_darah_diastol" placeholder="Diastole">
                                                    <span class="input-group-text">mmHg</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="suhu" class="form-label">Suhu*</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="suhu" placeholder="0">
                                                    <span class="input-group-text">°C</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="berat_badan" class="form-label">Berat Badan*</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="berat_badan" placeholder="0">
                                                    <span class="input-group-text">Kg</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="tinggi_badan" class="form-label">Tinggi Badan*</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="tinggi_badan" placeholder="0">
                                                    <span class="input-group-text">Cm</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="spo2" class="form-label">SpO2*</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="spo2" placeholder="0">
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="respiratory_rate" class="form-label">Respiratory Rate*</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="respiratory_rate" placeholder="0">
                                                    <span class="input-group-text">/mnt</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bagian 4: Assessment dan Plan -->
                        <div class="row g-4 mb-4">
                            <div class="col-lg-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="card-title mb-3">Assessment</h6>
                                        <textarea class="form-control" id="assessment" rows="4" placeholder="Ketikkan Assessment"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="card-title mb-3">Plan</h6>
                                        <textarea class="form-control" id="plan" rows="4" placeholder="Ketikkan Plan"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bagian 5: Pemeriksaan Fisik dan ICD 9-CM -->
                        <div class="row g-4 mb-4">
                            <div class="col-lg-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h6 class="card-title mb-0">Pemeriksaan Fisik</h6>
                                            <button type="button" class="btn btn-sm btn-primary">Tambah +</button>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Keterangan</th>
                                                        <th>Rincian</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="3" class="text-center">Tidak Ada Data</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="card-title mb-3">ICD 9-CM</h6>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="icd9cm_search" placeholder="Ketik Kode atau Tindakan">
                                            <button class="btn btn-outline-secondary" type="button">
                                                <i class="bi bi-search"></i>
                                            </button>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Nama ICD 9-CM</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="2" class="text-center">Tidak Ada Data</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bagian 6: Layanan dan Rincian Obat -->
                        <div class="row g-4 mb-4">
                            <div class="col-lg-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="card-title mb-3">Layanan</h6>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="layanan_search" placeholder="Ketik Layanan">
                                            <button class="btn btn-outline-secondary" type="button">
                                                <i class="bi bi-search"></i>
                                            </button>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Jumlah</th>
                                                        <th>Nama Layanan</th>
                                                        <th>Harga Layanan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="3" class="text-center">Tidak Ada Data</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="card-title mb-3">Rincian Obat</h6>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="obat_search" placeholder="Ketik Obat">
                                            <button class="btn btn-outline-secondary" type="button">
                                                <i class="bi bi-search"></i>
                                            </button>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Jumlah</th>
                                                        <th>Nama Obat</th>
                                                        <th>Harga Obat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="3" class="text-center">Tidak Ada Data</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bagian 7: Rencana Kontrol dan Catatan -->
                        <div class="row g-4 mb-4">
                            <div class="col-lg-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="card-title mb-3">Rencana Kontrol</h6>
                                        <div class="row g-2">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="rencana_kontrol_tanggal" placeholder="dd/mm/yyyy"
                                                        onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
                                                    <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="rencana_kontrol_alasan" placeholder="Alasan Kontrol">
                                                    <button class="btn btn-sm btn-primary" type="button">Tambah +</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive mt-3">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Tanggal Kontrol</th>
                                                        <th>Alasan Kontrol</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="2" class="text-center">Tidak Ada Data</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="card-title mb-3">Catatan</h6>
                                        <textarea class="form-control" id="catatan" rows="4" placeholder="Tambhakan Catatan disini"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="text-end mt-4">
                            <button type="button" class="btn btn-secondary me-2">Sebelumnya</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stepperSteps = document.querySelectorAll('.stepper-step');
            
            stepperSteps.forEach(step => {
                step.addEventListener('click', function() {
                    const stepNumber = this.getAttribute('data-step');
                    
                    stepperSteps.forEach(s => {
                        s.classList.remove('active');
                        s.querySelector('.stepper-step-button').classList.remove('active');
                    });
                    
                    for (let i = 1; i <= stepNumber; i++) {
                        const currentStep = document.querySelector(`[data-step="${i}"]`);
                        if (currentStep) {
                            currentStep.classList.add('active');
                            currentStep.querySelector('.stepper-step-button').classList.add('active');
                        }
                    }
                });
            });
        });
    </script>
@endsection