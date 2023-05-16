@extends('layout.main')

@section('title', 'Halaman Tambah')
@section('subtitle', 'Tambah')
@section('content')
{{-- Formulir Cretae Prodi --}}
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Formulir Tambah Program Studi</h4>
            <p class="card-description">
              Tambah Data Program Studi
            </p>
            <form class="forms-sample" action="{{ route('prodi.store') }}" method="post">
                @csrf
              <div class="form-group">
                <label for="nama_prodi">Nama Program Studi</label>
                <input type="text" class="form-control" name="nama_prodi" placeholder="Nama Program Studi" value="{{ OLD('nama_prodi') }}">
                @error('nama_prodi')
                         <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="fakultas_id">Pilih Nama Fakultas</label>
                  <select name="fakultas_id" class="form-control js-example-basic-single" >
                    <option value="">Pilih Nama Fakultas</option>
                      @foreach ($fakultas as $item)
                      <option value="{{ $item['id'] }}">{{ $item ['nama_fakultas'] }}</option>
                      @endforeach
                  </select>
                  @error('fakultas_id')
                        <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              <button type="submit" class="btn btn-rounded btn-primary me-2">Submit</button>
              <a href="{{ route('prodi.index')}}" class="btn btn-rounded btn-secondary">Cancel</a>
            </form>

</div>
@endsection