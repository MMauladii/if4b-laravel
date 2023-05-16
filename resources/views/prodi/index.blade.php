@extends('layout.main')
@section('title', 'Progra, Studi')
@section('subtitle', 'Program Studi')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          @if (Session::get('success'))
          <div class="alert alert-success">
              {{ Session::get('success')}}
          </div>
          @endif
          <h4 class="card-title">Program studi</h4>
          <div class="table-responsive">
            <table class="table table-striped">
                <table class="table table-hover">
                    <thead>
                        <tr>
                             <th>Nama Prodi</th>
                             <th>Nama Fakultas</th>
                             <th>Created At</th>
                        </tr>
                 </thead>
                 <tbody>
             @foreach ($prodis as $item)
                    <tr>
                       <td>  {{ $item->nama_prodi}}  </td>
                       <td>  {{ $item->fakultas->nama_fakultas}}</td>
                       <td>  {{ $item->created_at}}  </td>
                    </tr>
                 
             @endforeach
                    </tbody>
             </table>
            </table>
          </div>
          <div class="d-flex justify-content-end"><a href=" {{ route('prodi.create') }}" class="btn btn-rounded btn-secondary ">Tambah<a></div>
        </div>
      </div>
    </div>
  </div>
@endsection
