@extends('layouts.main')

@section('title', 'Data Siswa ')

@section('content')

    @if (Session::has('status'))
        <script>
            toastr.success("{{ Session::get('status') }}");
        </script>
    @endif
    @if (Session::has('delete'))
        <script>
            toastr.success("{{ Session::get('delete') }}");
        </script>
    @endif

    {{-- header tabel --}}
    <div class="animated fadeIn">
        <di class="content mt-3">
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong> Daftar Siswa</strong>
                    </div>

                    <div class="pull-right">
                        <a href="{{ url('siswa/create') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-plus"></i> Tambah
                        </a>
                    </div>
                </div>
                {{-- isi tabel --}}
                <div class="card-body table-responsive">
                    <table id="example" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nisn</th>
                                <th>Nama</th>
                                <th>Tempat & Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswas as $item)
                                <tr>
                                    <td>{{ $item->nisn }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->tempat }}, {{ $item->lahir }}</td>
                                    <td>{{ $item->jeniskelamin }}</td>
                                    <td>{{ $item->kelas }}</td>
                                    <td>
                                        <a href="{{ url('siswa/' . $item->nisn) }}" class="btn btn-primary btn-sm">
                                            Edit
                                        </a>
                                        <form action="{{ url('siswa/' . $item->nisn) }}" method="post" value="delete"
                                            class="d-lg-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-sm confirm_delete">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>

@endsection
