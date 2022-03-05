@extends('layouts.home')

@section('content')
    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Our Amazing Indekos</h1>
                        <span class="color-text-a">Find Best Indekos</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Indekos
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
        <div class="container">
            <div class="row">
                @foreach ($room['data'] as $item)
                    <div class="col-md-4">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{ $item['url'] . $item['thumbnail'] }}" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="/detail/{{ $item['id'] }}">Kos {{ $item['type'] }}
                                                <br /> {{ $item['location'] }}</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">rent/Month | Rp
                                                {{ number_format($item['price'], 0, ',', '.') }}</span>
                                        </div>
                                        <a href="/detail/{{ $item['id'] }}" class="link-a">Click here to view
                                            <span class="bi bi-chevron-right"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>{{ $item['room_size'] }}</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Status</h4>
                                                <span>{{$item['status']}}</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">No Room</h4>
                                                <span>{{$item['no_room']}}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <nav class="pagination-a">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <span class="bi bi-chevron-left"></span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item next">
                                <a class="page-link" href="#">
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Property Grid Single-->
@endsection
