@extends('layouts.main')
@section('content')
    <div style="width:800px" class="container 5px pt-4">
        <div class="m-3 p-2 d-flex align-items-center justify-content-between border1">
            <label for="nama">Nama Pemesan</label>
            <span>{{ $nama }}</span>
        </div>
        <div class="m-3 p-2 d-flex align-items-center justify-content-between border1">
            <label for="pilihan">Pilih Tiket</label>
            <span>{{ $pilihan }}</span>
        </div>
        <div class="m-3 p-2 d-flex align-items-center justify-content-between border1">
            <label for="event">Type Event</label>
            <span>{{ $event }}</span>
        </div>
        <div class="m-3 p-2 d-flex align-items-center justify-content-between border1">
            <label for="jumlah">Jumlah Orang</label>
            <span>{{ $jumlah }}</span>
        </div>
        <div class="m-3 p-2 d-flex align-items-center justify-content-between border1">
            <label for="date">Tanggal</label>
            <span>{{ $tanggal }}</span>
        </div>
        <div class="m-3 p-2 d-flex align-items-center justify-content-between border1">
            <label for="date">Harga 1 tiket</label>
            <span> {{ $harga }}</span>
        </div>
        <div class="m-3 p-2 d-flex align-items-center justify-content-between border1">
            <label for="date">Total Bayar</label>
            <span> {{ $totalharga }}</span>
        </div>
    </div>
@endsection
