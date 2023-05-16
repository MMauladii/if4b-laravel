@extends('layout.main')

@section('title', 'Halaman Tambah')
@section('subtitle', 'Tambah')
@section('content')
{{-- Formulir Cretae Fakutas --}}
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Formulir Tambah Fakultas</h4>
            <p class="card-description">
              Tambah Data Fakultas
            </p>
            <form class="forms-sample" action="{{ route('fakultas.store') }}" method="post">
                @csrf
              <div class="form-group">
                <label for="nama_fakultas">Nama Fakultas</label>
                <input type="text" class="form-control" name="nama_fakultas" placeholder="Nama Fakultas">
                @error('nama_fakultas')
                         <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="nama_dekan">Nama Dekan</label>
                <input type="text" class="form-control" name="nama_dekan" placeholder="Nama Dekan">
                @error('nama_dekan')
                         <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="nama_wakil_dekan">Nama Wakil Dekan</label>
                <input type="text" class="form-control" name="nama_wakil_dekan" placeholder="Nama Wakil Dekan">
                @error('nama_wakil_dekan')
                         <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <button type="submit" class="btn btn-rounded btn-primary me-2">Submit</button>
              <a href="{{ route('fakultas.index')}}" class="btn btn-rounded btn-secondary">Cancel</a>
            </form>

</div>
@endsection