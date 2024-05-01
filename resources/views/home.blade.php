@extends('layout.main')

@section('container')
<div class="page-content">
    <section class="section">
        <div class="card" style="display: grid; grid-template-columns: 1fr 1fr; align-items: center; gap: 20px;">
            <div>
                <h2 class="card-title" style="font-size: 36px; margin-left: 20px;">Selamat Datang</h2> <!-- Menambahkan margin kanan -->
                <h2 class="card-title" style="font-size: 36px; margin-left: 20px;">{{ $setting->title }}</h2> <!-- Menambahkan margin kanan -->
                <div class="card-body" style="text-align: justify;">
                    {!! $setting->description !!}
                </div>
            </div>
            <div style="text-align: center;">
                <img src="{{ asset('mazer/images/dasbor1.png') }}" alt="Description image" class="img-fluid mb-3" style="max-width: 100%;">
            </div>
        </div>
    </section>
</div>
@endsection
