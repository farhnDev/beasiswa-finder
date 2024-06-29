@extends('layouts.user_type.auth')

@section('content')
    <form action="{{ isset($beasiswa) ? route('beasiswa.update', $beasiswa->id) : route('beasiswa.store') }}" method="POST"
        enctype="multipart/form-data" class="row g-3">
        @csrf
        @if (isset($beasiswa))
            @method('PUT')
        @endif

        <div class="col-md-6">
            <!-- Gambar -->
            <div class="form-group mb-3">
                <label for="image" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="image" name="image">
                @if (isset($beasiswa) && $beasiswa->image)
                    <div class="mt-2">
                        <p>Gambar Lama:</p>
                        <img src="{{ asset('storage/' . $beasiswa->image) }}" alt="Gambar Lama" style="max-width: 100%; border-radius:3%;">
                    </div>
                @endif
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Nama Beasiswa -->
            <div class="form-group mb-3">
                <label for="title" class="form-label">Nama Beasiswa</label>
                <input type="text" class="form-control" id="title" name="title"
                    value="{{ isset($beasiswa) ? $beasiswa->title : old('title') }}" required>
            </div>

            <!-- Deskripsi Singkat -->
            <div class="form-group mb-3">
                <label for="description_short" class="form-label">Deskripsi Singkat</label>
                <textarea class="form-control" id="description_short" name="description_short" rows="3"
                    required>{{ isset($beasiswa) ? $beasiswa->description_short : old('description_short') }}</textarea>
            </div>

            <!-- Waktu -->
            <div class="form-group mb-3">
                <label for="waktu" class="form-label">Waktu</label>
                <input type="date" class="form-control" id="waktu" name="waktu"
                    value="{{ isset($beasiswa) ? \Carbon\Carbon::parse($beasiswa->waktu)->format('Y-m-d') : old('waktu') }}"
                    required>
            </div>

            <!-- Tempat -->
            <div class="form-group mb-3">
                <label for="tempat" class="form-label">Tempat</label>
                <input type="text" class="form-control" id="tempat" name="tempat"
                    value="{{ isset($beasiswa) ? $beasiswa->tempat : old('tempat') }}" required>
            </div>
        </div>

        <div class="col-md-6">
            <!-- Kuota -->
            <div class="form-group mb-3">
                <label for="kuota" class="form-label">Kuota</label>
                <input type="number" class="form-control" id="kuota" name="kuota"
                    value="{{ isset($beasiswa) ? $beasiswa->kuota : old('kuota') }}" required>
            </div>

            <!-- Sasaran -->
            <div class="form-group mb-3">
                <label for="sasaran" class="form-label">Sasaran</label>
                <input type="text" class="form-control" id="sasaran" name="sasaran"
                    value="{{ isset($beasiswa) ? $beasiswa->sasaran : old('sasaran') }}">
            </div>

            <!-- Persyaratan -->
            <div class="form-group mb-3">
                <label for="persyaratan" class="form-label">Persyaratan</label>
                <textarea class="form-control" id="persyaratan" name="persyaratan" rows="3"
                    required>{{ isset($beasiswa) ? $beasiswa->persyaratan : old('persyaratan') }}</textarea>
            </div>

            <!-- Berkas Pendaftaran -->
            <div class="form-group mb-3">
                <label for="berkas_pendaftaran" class="form-label">Berkas Pendaftaran</label>
                <textarea class="form-control" id="berkas_pendaftaran" name="berkas_pendaftaran" rows="3"
                    required>{{ isset($beasiswa) ? $beasiswa->berkas_pendaftaran : old('berkas_pendaftaran') }}</textarea>
            </div>

            <!-- Mekanisme Pendaftaran -->
            <div class="form-group mb-3">
                <label for="mekanisme_pendaftaran" class="form-label">Mekanisme Pendaftaran</label>
                <textarea class="form-control" id="mekanisme_pendaftaran" name="mekanisme_pendaftaran" rows="3"
                    required>{{ isset($beasiswa) ? $beasiswa->mekanisme_pendaftaran : old('mekanisme_pendaftaran') }}</textarea>
            </div>

            <!-- Seleksi Berkas -->
            <div class="form-group mb-3">
                <label for="seleksi_berkas" class="form-label">Seleksi Berkas</label>
                <textarea class="form-control" id="seleksi_berkas" name="seleksi_berkas" rows="3"
                    required>{{ isset($beasiswa) ? $beasiswa->seleksi_berkas : old('seleksi_berkas') }}</textarea>
            </div>

            <!-- Jadwal Beasiswa -->
            <div class="form-group mb-3">
                <label for="jadwal_beasiswa" class="form-label">Jadwal Beasiswa</label>
                <textarea class="form-control" id="jadwal_beasiswa" name="jadwal_beasiswa" rows="3"
                    required>{{ isset($beasiswa) ? $beasiswa->jadwal_beasiswa : old('jadwal_beasiswa') }}</textarea>
            </div>

            <!-- Kontak -->
            <div class="form-group mb-3">
                <label for="kontak" class="form-label">Kontak</label>
                <input type="text" class="form-control" id="kontak" name="kontak"
                    value="{{ isset($beasiswa) ? $beasiswa->kontak : old('kontak') }}" required>
            </div>

            <!-- Jenis Pendidikan -->
            <div class="form-group mb-3">
                <label for="jenis_pendidikan" class="form-label">Jenis Pendidikan</label>
                <select class="form-control" id="jenis_pendidikan" name="jenis_pendidikan" required>
                    <option value="S1" @if (isset($beasiswa) && $beasiswa->jenis_pendidikan == 'S1') selected @endif>S1</option>
                    <option value="S2" @if (isset($beasiswa) && $beasiswa->jenis_pendidikan == 'S2') selected @endif>S2</option>
                    <option value="S3" @if (isset($beasiswa) && $beasiswa->jenis_pendidikan == 'S3') selected @endif>S3</option>
                </select>
            </div>

            <!-- Submit Button -->
        </div>
        <div class="form-group mb-3 text-center">
            <button type="submit" class="btn bg-gradient-primary w-100">{{ isset($beasiswa) ? 'Update' : 'Simpan' }}</button>
        </div>
    </form>
@endsection
