@extends('layout.main')
@section('title', 'Mahasiswa')
{{-- @section('subtitle', 'Mahasiswa') --}}

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            @if (Session::get('success'))
                <div class="alert alert-success">
                {{ Session::get('success') }}
                </div>
            @endif
            <h4 class="card-title">Mahasiswa</h4>
            <div class="d-flex justify-content-between mt-3">
                <form class="col-lg-6 rounded border-info border d-flex" method="GET">
                    <input type="text" name="search" class="form-control" placeholder="">
                </form>
                <div>
                <a href="{{ route('mahasiswa.create') }}" class="btn btn-secondary btn-rounded">Tambah</a>
                </div>
            </div>
            <div class="table-responsive">
            <table class="table table-striped table-hover" id="posts-table">
                <thead>
                        <tr>
                            <th scope="col"><input type="checkbox" class="check-all">Pilih Semua</th>
                            <th>Foto</th>
                            <th>NPM</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Kota Lahir</th>
                            <th>Program Studi</th>
                            <th>Created At</th>
                            <th>Ubah</th>
                            <th>Hapus</th>
                        </tr>
                </thead>
                <tbody>
                @foreach ($mahasiswas as $item)
                    <tr>
                        <td><input type="checkbox" class="check" value="{{ $item->id }}"></td>
                        <td>  <img src="{{ $item->foto ? asset('storage/'.$item->foto) : asset('images/faces/face5.jpg') }}">  </td>
                        <td>  {{ $item->npm}}  </td>
                        <td>  {{ $item->nama}}  </td>
                        <td>  {{ $item->tanggal}}  </td>
                        <td>  {{ $item->kota_lahir}}  </td>
                        <td>  {{ $item->prodi->nama_prodi}}</td>
                        <td>  {{ $item->created_at}}  </td>
                        <td>
                                <a href="{{route('mahasiswa.edit' , $item->id)}}"><button class="btn btn-success btn-sm btn-rounded">Edit</button></a>
                        </td>
                        <td>
                                <form method="post" class="delete-form" data-route="{{ route('mahasiswa.destroy',$item->id) }}">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm btn-rounded">Delete</button>
                            </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end mt-3">
            <button class="btn btn-danger btn-rounded" id="multi-delete" data-route="{{ route('mhs-multi-delete') }}">Delete All Selected</button>
            </div>
            <div class="mt-4">
                {{$mahasiswas -> withQueryString()->links('pagination::bootstrap-5')}}
           </div>
            </div>

        </div>
        </div>
    </div>
</div>
<!-- row end -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://www.jqueryscript.net/demo/check-all-rows/dist/TableCheckAll.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

    $("#posts-table").TableCheckAll();

    $('#multi-delete').on('click', function() {
        var button = $(this);
        var selected = [];
        $('#posts-table .check:checked').each(function() {
        selected.push($(this).val());
        });

        Swal.fire({
        icon: 'warning',
            title: 'Are you sure you want to delete selected record(s)?',
            showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: 'Yes'
        }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: button.data('route'),
            data: {
                'selected': selected
            },
            success: function (response, textStatus, xhr) {
                Swal.fire({
                icon: 'success',
                    title: response,
                    showDenyButton: false,
                    showCancelButton: false,
                    confirmButtonText: 'Yes'
                }).then((result) => {
                window.location='/posts'
                });
            }
            });
        }
        });
    });

    $('.delete-form').on('submit', function(e) {
        e.preventDefault();
        var button = $(this);

        Swal.fire({
        icon: 'warning',
            title: 'Are you sure you want to delete this record?',
            showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: 'Yes'
        }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: button.data('route'),
            data: {
                '_method': 'delete'
            },
            success: function (response, textStatus, xhr) {
                Swal.fire({
                icon: 'success',
                    title: response,
                    showDenyButton: false,
                    showCancelButton: false,
                    confirmButtonText: 'Yes'
                }).then((result) => {
                window.location='/mahasiswa'
                });
            }
            });
        }
        });
        
    })
    });
</script>

@endsection
