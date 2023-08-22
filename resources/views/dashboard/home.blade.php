@extends('layouts.main')

@section('title', 'Dashboard')



@section('content')
    @if (Session::has('status'))
        <script>
            toastr.success("{{ Session::get('status') }}");
        </script>
    @endif

    <div style="text-align: center;">
        <h1> Selamat Datang</h1>
        <h2>Di Sistem Pendukung Keputusan Siswa Berprestasi</h2>
    </div>

@endsection
