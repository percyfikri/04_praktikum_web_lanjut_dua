@extends('master')

@section('title', 'Dashboard')

@section('pages')

@section('page', 'Dashboard')

@section('konten_dashboard')

@push('custom_css')
<style></style>
@endpush  

@foreach ($data as $item)
            <h1>{{$item->title}}</h1>
            <p>{{$item->content}}</p>
            {{-- <p>Ini adalah Halaman Utama Kami</p> --}}
            @endforeach
@endsection
@push('custom_js')
<script>
alert('Selamat Datang')
</script>
<style></style>
@endpush
