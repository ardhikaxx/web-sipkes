@extends('layouts.app')

@section('title', 'Pendaftaran - SIPKES')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/pendaftaran.css') }}">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card p-4 shadow-sm">
                    <h1 class="mb-4">Pendaftaran</h1>

                    <div class="stepper-wrapper mb-5">
                        <div class="stepper" id="pendaftaranStepper">
                            <ol class="stepper-steps">
                                <li class="stepper-step active" data-step="1">
                                    <button type="button" class="stepper-step-button active" data-bs-toggle="step">
                                        <span class="stepper-step-indicator">1</span>
                                        <span class="stepper-step-label">Pendaftaran</span>
                                    </button>
                                </li>
                                <li class="stepper-step" data-step="2">
                                    <button type="button" class="stepper-step-button" data-bs-toggle="step">
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

                    <!-- Form Pendaftaran -->
                    <form action="#" method="POST">
                        @csrf
                        <h5 class="mb-3">Data Identitas Pasien</h5>
                        <p class="text-muted mb-4">Cari Data Pasien</p>

                        <div class="row g-3">
                            <!-- Kolom Kiri -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="no_rm" class="form-label">No. RM</label>
                                    <input type="text" class="form-control" id="no_rm" placeholder="Masukkan no. RM">
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
                                </div>
                                <div class="mb-3">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" class="form-control" id="nik" placeholder="16 digit">
                                </div>
                                <div class="mb-3">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir"
                                        placeholder="Masukkan tempat lahir">
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="tanggal_lahir" placeholder="DD/MM/YYYY"
                                        onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
                                </div>
                                <div class="mb-3">
                                    <label for="status_perkawinan" class="form-label">Status Perkawinan</label>
                                    <select class="form-select" id="status_perkawinan">
                                        <option value="">Belum kawin</option>
                                        <option value="kawin">Kawin</option>
                                        <option value="cerai">Cerai</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                                    <select class="form-select" id="kewarganegaraan">
                                        <option value="WNI">WNI</option>
                                        <option value="WNA">WNA</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="golongan_darah" class="form-label">Golongan Darah</label>
                                    <select class="form-select" id="golongan_darah">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                        <option value="O">O</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Kolom Kanan -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="alamat_lengkap" class="form-label">Alamat Lengkap</label>
                                    <input type="text" class="form-control" id="alamat_lengkap"
                                        placeholder="Nama Jalan/Blok/Nomor rumah">
                                </div>
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="provinsi" class="form-label">Provinsi :</label>
                                            <input type="text" class="form-control" id="provinsi">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kota_kabupaten" class="form-label">Kota / Kabupaten :</label>
                                            <input type="text" class="form-control" id="kota_kabupaten">
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kecamatan" class="form-label">Kecamatan :</label>
                                            <input type="text" class="form-control" id="kecamatan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kelurahan_desa" class="form-label">Kelurahan / Desa</label>
                                            <input type="text" class="form-control" id="kelurahan_desa">
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_pos" class="form-label">Kode Pos :</label>
                                            <input type="text" class="form-control" id="kode_pos">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="rt" class="form-label">RT :</label>
                                            <input type="text" class="form-control" id="rt">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="rw" class="form-label">RW :</label>
                                            <input type="text" class="form-control" id="rw">
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                            <select class="form-select" id="jenis_kelamin">
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="agama" class="form-label">Agama</label>
                                            <select class="form-select" id="agama">
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="pendidikan" class="form-label">Pendidikan</label>
                                            <select class="form-select" id="pendidikan">
                                                <option value="">Tidak sekolah</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMA">SMA</option>
                                                <option value="Diploma">Diploma</option>
                                                <option value="Sarjana">Sarjana</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                            <select class="form-select" id="pekerjaan">
                                                <option value="">Tidak bekerja</option>
                                                <option value="PNS">PNS</option>
                                                <option value="Swasta">Swasta</option>
                                                <option value="Wiraswasta">Wiraswasta</option>
                                                <option value="Pelajar">Pelajar</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="no_telepon" class="form-label">No. Telepon</label>
                                    <div class="input-group">
                                        <span class="input-group-text">+62</span>
                                        <input type="text" class="form-control" id="no_telepon">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="nama_ibu_kandung" class="form-label">Nama Ibu Kandung</label>
                                    <input type="text" class="form-control" id="nama_ibu_kandung">
                                </div>
                            </div>
                        </div>

                        <!-- Identitas Wali Pasien -->
                        <h5 class="mt-4 mb-3">Identitas Wali Pasien</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="hubungan_wali" class="form-label">Hubungan dengan Pasien</label>
                                    <select class="form-select" id="hubungan_wali">
                                        <option value="Diri sendiri">Diri sendiri</option>
                                        <option value="Orang Tua">Orang Tua</option>
                                        <option value="Wali">Wali</option>
                                        <option value="Keluarga">Keluarga</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="nama_wali" class="form-label">Nama Wali</label>
                                    <input type="text" class="form-control" id="nama_wali">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="tanggal_lahir_wali" class="form-label">Tanggal Lahir Wali</label>
                                    <input type="text" class="form-control" id="tanggal_lahir_wali"
                                        placeholder="DD/MM/YYYY" onfocus="(this.type='date')"
                                        onblur="if(!this.value)this.type='text'">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="no_telepon_wali" class="form-label">No. Telepon Wali</label>
                                    <div class="input-group">
                                        <span class="input-group-text">+62</span>
                                        <input type="text" class="form-control" id="no_telepon_wali">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="alamat_wali" class="form-label">Alamat Wali</label>
                                    <input type="text" class="form-control" id="alamat_wali">
                                </div>
                            </div>
                        </div>

                        <!-- Layanan, Dokter, Cara Pembayaran -->
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="layanan" class="form-label">Layanan</label>
                                    <select class="form-select" id="layanan">
                                        <option value="Poli Umum">Poli Umum</option>
                                        <option value="Poli Gigi">Poli Gigi</option>
                                        <option value="Poli Anak">Poli Anak</option>
                                        <option value="Poli KIA">Poli KIA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="dokter" class="form-label">Dokter</label>
                                    <input type="text" class="form-control" id="dokter"
                                        placeholder="Pilih dokter...">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="cara_pembayaran" class="form-label">Cara Pembayaran</label>
                                    <select class="form-select" id="cara_pembayaran">
                                        <option value="Umum">Umum</option>
                                        <option value="BPJS">BPJS</option>
                                        <option value="Asuransi">Asuransi</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Tombol Simpan -->
                        <div class="text-end mt-4">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // JavaScript untuk stepper functionality
        document.addEventListener('DOMContentLoaded', function() {
            const stepperSteps = document.querySelectorAll('.stepper-step');
            
            stepperSteps.forEach(step => {
                step.addEventListener('click', function() {
                    const stepNumber = this.getAttribute('data-step');
                    
                    // Remove active class from all steps
                    stepperSteps.forEach(s => {
                        s.classList.remove('active');
                        s.querySelector('.stepper-step-button').classList.remove('active');
                    });
                    
                    // Add active class to current step and all previous steps
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
