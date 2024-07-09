@extends('layouts.main')
@section('content')
<div class="text-center mb-5">
    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i
            class="bi bi-envelope"></i></div>
    <h1 class="textdeep">Music Integrityst Tiket</h1>
    <br>
    <table class="text-center mb-5" border=5px dashed>
        <tr>
            <th>No</th>
            <th>Jenis Tiket</th>
            <th>Harga Tiket</th>
        </tr>
        @foreach ($data as $key => $item)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->jenis_tiket }}</td>
            <td>{{ $item->harga_tiket }}</td>
        </tr>  
        @endforeach
    </table>
    <p class="lead fw-normal text-muted mb-0"></p>
</div>
@endsection