@extends('layouts.app')

@section('title', 'Pemeriksaan Awal - SIPKES')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/pemeriksaan-awal.css') }}">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card p-4 shadow-sm">
                    <h1 class="mb-4">Pemeriksaan Awal</h1>

                    <div class="stepper-wrapper mb-5">
                        <div class="stepper" id="pemeriksaanAwalStepper">
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
                                <li class="stepper-step" data-step="3">
                                    <button type="button" class="stepper-step-button" data-bs-toggle="step">
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

                        <h5 class="mb-3">Data Pemeriksaan Awal</h5>

                        <div class="row g-3 mb-4">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="no_antrian" class="form-label">No. Antrian</label>
                                    <input type="text" class="form-control" id="no_antrian" placeholder="Masukkan no. antrian">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="no_rm" class="form-label">No. RM</label>
                                    <input type="text" class="form-control" id="no_rm" placeholder="Masukkan no. RM">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="nama_pasien" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama_pasien" placeholder="Masukkan nama pasien">
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="tanggal_pemeriksaan" class="form-label">Tanggal Pemeriksaan</label>
                                    <input type="text" class="form-control" id="tanggal_pemeriksaan" placeholder="mm/dd/yyyy"
                                        onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="kunjungan_sakit" class="form-label">Kunjungan Sakit</label>
                                    <select class="form-select" id="kunjungan_sakit">
                                        <option value="Tidak">Tidak</option>
                                        <option value="Ya">Ya</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="card-title mb-3">Subjek/Keluhan</h6>
                                        <textarea class="form-control" id="subjek_keluhan" rows="8" placeholder="Masukkan keluhan pasien..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="card-title mb-3">Objective</h6>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="sistol" class="form-label">Sistole</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="sistol" placeholder="0">
                                                    <span class="input-group-text">mmHg</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="diastol" class="form-label">Diastole</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="diastol" placeholder="0">
                                                    <span class="input-group-text">mmHg</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="berat_badan" class="form-label">Berat Badan</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="berat_badan" placeholder="0">
                                                    <span class="input-group-text">kg</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="tinggi_badan" class="form-label">Tinggi Badan</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="tinggi_badan" placeholder="0">
                                                    <span class="input-group-text">cm</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="suhu" class="form-label">Suhu</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="suhu" placeholder="0">
                                                    <span class="input-group-text">°C</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="spo2" class="form-label">SpO2</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="spo2" placeholder="0">
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="respiratory_rate" class="form-label">Respiratory Rate</label>
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