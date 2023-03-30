@extends('layout.master')

@section('title', 'Halaman Fakulltas')
@section('subtitle', '')
@section('content')
<h2>Fakultas</h2>
{{-- <p>Ini halaman fakultas</p> --}}
{{-- {{ $fikr }} --}}
<ul>
@foreach ($datafakultas as $item)
       <li>  {{ $item }}  </li>
    
@endforeach
</ul>
@endsection
