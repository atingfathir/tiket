@extends('layouts.main')
@section('content')
    <div class="px-9">
        {{-- container --}}
        <!-- Contact form-->php artisan migrate --path=/database/migrations/
        <div class="bg1 py-5 px-4 px-md-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i
                        class="bi bi-envelope"></i></div>
                <h1 class="textdeep">Music Integrityst Tiket</h1>
                <p class="lead fw-normal text-muted mb-0"></p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <form method="post" action="{{ route('newtiket.rekap') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                        </div>
                        <div class="mb-3 form-group">
                            <label class="mb-3">Nama Pemesan</label>
                            <input name="nama" class="form-control btn btn-secondary dropdown-toggle" />
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-3">Pilih Tiket</label>
                            <select name="pilihan" id="pilihan" class="btn btn-secondary dropdown-toggle form-control"
                                type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false" required>
                                @foreach ($pilihan as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->nama_tiket }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 form-group">

                            <label class="mb-3">Pilih Event</label>
                            <select name="event" id="event" class="btn btn-secondary dropdown-toggle form-control"
                                type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false" required>
                                @foreach ($event as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-3" for="penumpang">Pilih Orang</label>
                            <select name="jumlah" id="jumlah" class="btn btn-secondary dropdown-toggle form-control"
                                data-bs-toggle="dropdown" id="dropdownMenu2" type="button" aria-expanded="false" required>
                                @foreach ($jumlah as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="date" class="mb-3">Tanggal Keberangkatan</label>
                            <input type="date" class="form-control mb-3 btn btn-secondary" name="date" id="date">
                        </div>
                        <div class="mb-3 form-group">
                            <button class="btn btn-secondary mb-5 pt-2" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
    </div>
@endsection
