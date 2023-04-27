@extends('layout.master')
@section('title', 'Progra, Studi')
@section('subtitle', 'Program Studi')

@section('content')
    <h1>Ini halaman program studi</h1>
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
        

@endsection
