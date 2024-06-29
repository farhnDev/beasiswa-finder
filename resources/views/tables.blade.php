@extends('layouts.user_type.auth')

@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0 d-flex justify-content-between">
            <h6>Beasiswa Table</h6>
            <a href="{{ route('beasiswa.create') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Add Beasiswa</a>
          </div>
          <div class="card-body px-0 pt-0 pb-2 text-center">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Beasiswa</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Deskripsi</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Persyaratan</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Berkas Pendaftaran</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mekanisme Pendaftaran</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Seleksi Berkas</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jadwal Beasiswa</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kontak</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Pendidikan</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($beasiswas as $beasiswa)
                    <tr>
                      <td>{{ $beasiswa->id }}</td>
                      <td>
                        <img src="{{ asset('storage/' . $beasiswa->image) }}" class="avatar avatar-sm me-3" alt="{{ $beasiswa->title }}">
                      </td>
                      <td>{{ $beasiswa->title }}</td>
                      <td>{{ $beasiswa->description_short }}</td>
                      <td class="align-middle text-center">{{ $beasiswa->persyaratan }}</td>
                      <td class="align-middle text-center">{{ $beasiswa->berkas_pendaftaran }}</td>
                      <td class="align-middle text-center">{{ $beasiswa->mekanisme_pendaftaran }}</td>
                      <td class="align-middle text-center">{{ $beasiswa->seleksi_berkas }}</td>
                      <td class="align-middle text-center">{{ $beasiswa->jadwal_beasiswa }}</td>
                      <td class="align-middle text-center">{{ $beasiswa->kontak }}</td>
                      <td class="align-middle text-center">{{ $beasiswa->jenis_pendidikan }}</td>
                      <td class="align-middle text-center">
                        <a href="{{ route('beasiswa.edit', $beasiswa->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('beasiswa.destroy', $beasiswa->id) }}" method="POST" style="display:inline-block;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection
