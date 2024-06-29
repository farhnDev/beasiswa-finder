@extends('layouts.user_type.auth')

@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between">
                            <h6>Menambahkan Data Beasiswa</h6>
                            <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Add Data</a>
                        </div>
                        <div class="card-body px-0 pt-0">
                            <div class="table-responsive p-0">
                                <form action="{{ route('beasiswa.store') }}" method="POST" enctype="multipart/form-data"
                                    class="d-flex flex-column align-items-center">
                                    @csrf

                                    <div class="row d-flex justify-content-center">
                                        <!-- Gambar -->
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="image">Gambar</label>
                                            <input type="file" class="form-control" id="image" name="image"
                                                required>
                                        </div>
                                    </div>

                                    <!-- Nama Beasiswa dan Deskripsi Singkat -->
                                    <div class="row d-flex justify-content-center">
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="title">Nama Beasiswa</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                placeholder="Masukkan Nama Beasiswa" required>
                                        </div>
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="description_short">Deskripsi Singkat</label>
                                            <textarea class="form-control" id="description_short" name="description_short" rows="3"
                                                placeholder="Masukkan Deskripsi Singkat" required></textarea>
                                        </div>
                                    </div>

                                    <!-- Deskripsi Panjang -->
                                    <div class="row d-flex justify-content-center">
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="description_long">Deskripsi Panjang</label>
                                            <textarea class="form-control" id="description_long" name="description_long" rows="5"
                                                placeholder="Masukkan Deskripsi Panjang" required></textarea>
                                        </div>
                                    </div>

                                    <!-- Waktu dan Tempat -->
                                    <div class="row d-flex justify-content-center">
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="waktu">Waktu</label>
                                            <input type="date" class="form-control" id="waktu" name="waktu"
                                                placeholder="Masukkan Waktu" required>
                                        </div>
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="tempat">Tempat</label>
                                            <input type="text" class="form-control" id="tempat" name="tempat"
                                                placeholder="Masukkan Tempat" required>
                                        </div>
                                    </div>

                                    <!-- Kuota dan Sasaran -->
                                    <div class="row d-flex justify-content-center">
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="kuota">Kuota</label>
                                            <input type="number" class="form-control" id="kuota" name="kuota"
                                                placeholder="Masukkan Kuota" required>
                                        </div>
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="sasaran">Sasaran</label>
                                            <input type="text" class="form-control" id="sasaran" name="sasaran"
                                                placeholder="Masukkan Sasaran">
                                        </div>
                                    </div>

                                    <!-- Persyaratan dan Berkas Pendaftaran -->
                                    <div class="row d-flex justify-content-center">
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="persyaratan">Persyaratan</label>
                                            <textarea class="form-control" id="persyaratan" name="persyaratan" rows="3" placeholder="Masukkan Persyaratan"
                                                required></textarea>
                                        </div>
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="berkas_pendaftaran">Berkas Pendaftaran</label>
                                            <textarea class="form-control" id="berkas_pendaftaran" name="berkas_pendaftaran" rows="3"
                                                placeholder="Masukkan Berkas Pendaftaran" required></textarea>
                                        </div>
                                    </div>

                                    <!-- Mekanisme Pendaftaran dan Seleksi Berkas -->
                                    <div class="row d-flex justify-content-center">
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="mekanisme_pendaftaran">Mekanisme Pendaftaran</label>
                                            <textarea class="form-control" id="mekanisme_pendaftaran" name="mekanisme_pendaftaran" rows="3"
                                                placeholder="Masukkan Mekanisme Pendaftaran" required></textarea>
                                        </div>
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="seleksi_berkas">Seleksi Berkas</label>
                                            <textarea class="form-control" id="seleksi_berkas" name="seleksi_berkas" rows="3"
                                                placeholder="Masukkan Seleksi Berkas" required></textarea>
                                        </div>
                                    </div>

                                    <!-- Jadwal Beasiswa dan Kontak -->
                                    <div class="row d-flex justify-content-center">
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="jadwal_beasiswa">Jadwal Beasiswa</label>
                                            <textarea class="form-control" id="jadwal_beasiswa" name="jadwal_beasiswa" rows="3"
                                                placeholder="Masukkan Jadwal Beasiswa" required></textarea>
                                        </div>
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="kontak">Kontak</label>
                                            <input type="text" class="form-control" id="kontak" name="kontak"
                                                placeholder="Masukkan Kontak" required>
                                        </div>
                                    </div>

                                    <!-- Jenis Pendidikan -->
                                    <div class="row d-flex justify-content-center">
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="jenis_pendidikan">Jenis Pendidikan</label>
                                            <select class="form-control" id="jenis_pendidikan" name="jenis_pendidikan"
                                                required>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Submit Button -->
                                    <div class="row d-flex justify-content-center">
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
