@extends('layout.main')

@section('title', 'Halaman Mahasiswa')
@section('subtitle', 'Create New')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Mahasiswa</h4>
                  <p class="card-description">
                    Formulir 
                  </p>
                  <form class="forms-sample" action="{{ route('mahasiswa.store')}} " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="foto">Foto</label>
                      <input type="file" class="form-control" name="foto" placeholder="foto">
                      @error('foto')
                         <span class="text-danger">{{$message}}</span>
                      @enderror 
                    </div>
                     <div class="form-group">
                      <label for="npm">NPM</label>
                      <input type="number" class="form-control" name="npm" placeholder="NPM">
                      @error('npm')
                           <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                     <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" name="nama" placeholder="nama">
                      @error('nama')
                           <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                        @error('tgl_lahir')
                             <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="kota_lahir">Pilih Kota Lahir</label>
                        <select name="kota_lahir" class="form-control js-example-basic-single">
                        <option value=""></option> 
                        <option value="ACEH">ACEH</option>
                        <option value="SUMATERA UTARA">SUMATERA UTARA</option>
                        <option value="SUMATERA BARAT">SUMATERA BARAT</option>
                        <option value="RIAU">RIAU</option>
                        <option value="JAMBI">JAMBI</option>
                        <option value="SUMATERA SELATAN">SUMATERA SELATAN</option>
                        <option value="BENGKULU">BENGKULU</option>
                        <option value="LAMPUNG">LAMPUNG</option>
                        <option value="KEPULAUAN BANGKA BELITUNG">KEPULAUAN BANGKA BELITUNG</option>
                        <option value="KEPULAUAN RIAU">KEPULAUAN RIAU</option>
                        <option value="DKI JAKARTA">DKI JAKARTA</option>
                        <option value="JAWA BARAT">JAWA BARAT</option>
                        <option value="JAWA TENGAH">JAWA TENGAH</option>
                        <option value="DI YOGYAKARTA">DI YOGYAKARTA</option>
                        <option value="JAWA TIMUR">JAWA TIMUR</option>
                        <option value="BANTEN">BANTEN</option>
                        <option value="BALI">BALI</option>
                        <option value="NUSA TENGGARA BARAT">NUSA TENGGARA BARAT</option>
                        <option value="NUSA TENGGARA TIMUR">NUSA TENGGARA TIMUR</option>
                        <option value="KALIMANTAN BARAT">KALIMANTAN BARAT</option>
                        <option value="KALIMANTAN TENGAH">KALIMANTAN TENGAH</option>
                        <option value="KALIMANTAN SELATAN">KALIMANTAN SELATAN</option>
                        <option value="KALIMANTAN TIMUR">KALIMANTAN TIMUR</option>
                        <option value="KALIMANTAN UTARA">KALIMANTAN UTARA</option>
                        <option value="SULAWESI UTARA">SULAWESI UTARA</option>
                        <option value="SULAWESI TENGAH">SULAWESI TENGAH</option>
                        <option value="SULAWESI SELATAN">SULAWESI SELATAN</option>
                        <option value="SULAWESI TENGGARA">SULAWESI TENGGARA</option>
                        <option value="GORONTALO">GORONTALO</option>
                        <option value="SULAWESI BARAT">SULAWESI BARAT</option>
                        <option value="MALUKU">MALUKU</option>
                        <option value="MALUKU UTARA">MALUKU UTARA</option>
                        <option value="PAPUA BARAT">PAPUA BARAT</option>
                        <option value="PAPUA">PAPUA</option>
                       {{-- <select name="kota_lahir" class="form-control js-example-basic-single">
                       @foreach ($regencies as $item2)
                              <option value="{{$item2['name']}}">{{$item2['name']}}</option>
                       @endforeach
                      </select> --}}
                        </select>
                        @error('kota_lahir')
                           <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="prodi_id">Pilih Prodi</label>
                       <select name="prodi_id" class="form-control js-example-basic-single">
                       <option value=""></option>
                       @foreach ($prodi as $item)
                              <option value="{{$item->id}}">{{$item->nama_prodi}}</option>
                       @endforeach
                      </select>
                        @error('nama_prodi')
                           <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                    <button type="submit" class="btn  btn-rounded btn-success me-2">Simpan</button>
                    <a  href="{{route('mahasiswa.index')}}" class="btn btn-rounded btn-dark">batal</a>
                  </form>
                </div>
              </div>
            </div>
</div>


@endsection