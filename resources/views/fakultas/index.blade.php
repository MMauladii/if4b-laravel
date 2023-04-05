@extends('layout.master')

@section('title', 'Halaman Fakulltas')
@section('subtitle', 'Fakultas')
@section('content')

{{-- <p>Ini halaman fakultas</p> --}}
{{-- {{ $fikr }} --}}
<table class="table table-hover">
       <thead>
              <tr>
                   <th>Nama Fakultas</th>
              </tr>
       </thead>
       <tbody>
@foreach ($datafakultas as $item)
       <tr><td>  {{ $item }}  </td></tr>
    
@endforeach
       </tbody>
</table>
@endsection
