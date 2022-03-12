@extends('layouts.home')

@section('content')
    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">{{ 'Kos ' . $room['type'] }}</h1>
                        <span class="color-text-a">{{ $room['location'] }}</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/best-rooms">Indekos</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ 'Kos ' . $room['type'] }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div id="property-single-carousel" class="swiper">
                        <div class="swiper-wrapper">
                            @foreach ($room['gallery'] as $item)
                                <div class="carousel-item-b swiper-slide">
                                    <img src="{{ $room['url'] . $item['path'] }}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="property-single-carousel-pagination carousel-pagination"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">

                    <div class="row justify-content-between">
                        <div class="col-md-5 col-lg-4">
                            <div class="property-price d-flex justify-content-center foo">
                                <div class="card-header-c d-flex">
                                    <div class="card-box-ico">
                                        <span class="bi bi-cash" style="font-size: 40px; font-weight: bold">Rp</span>
                                    </div>
                                    <div class="card-title-c align-self-center">
                                        <h5 class="title-c"><?= $room['price'] ?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="property-summary">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="title-box-d section-t4">
                                            <h3 class="title-d">Quick Summary</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary-list">
                                    <ul class="list">
                                        <li class="d-flex justify-content-between">
                                            <strong>Location:</strong>
                                            <span>{{ $room['location'] }}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Property Type:</strong>
                                            <span>{{ $room['type'] }}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Status:</strong>
                                            <span>{{ $room['status'] }}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Area:</strong>
                                            <span>{{ $room['room_size'] }}
                                            </span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Fasilities:</strong>
                                            <ul class="list">
                                                @foreach ($room['room_fasilities'] as $item)
                                                    <li class="d-flex justify-content-end">
                                                        <span>
                                                            {{ $item['fasilities']['fasility'] }}
                                                        </span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7 col-lg-7 section-md-t3">
                            <div class="row section-t3">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Booking now</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="property-contact">
                                <form class="form-a" method="POST" action="/booking/2">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 mb-1">
                                            <div class="form-group">
                                                <input type="datetime-local"
                                                    class="form-control form-control-lg form-control-a" id="inputName"
                                                    placeholder="Checkin" required name="check_in">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-1">
                                            <div class="form-group">
                                                <select name="payment_type"
                                                    class="form-control form-control-lg form-control-a">
                                                    <option value="">-- Pilih jenis pembayaran ---</option>
                                                    <option value="on check in">Saat check in</option>
                                                    <option value="transfer">Transefer bank</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-1">
                                            <div class="form-group">
                                                <select name="rental_type"
                                                    class="form-control form-control-lg form-control-a">
                                                    <option value="">-- Pilih jenis sewa ---</option>
                                                    <option value="month">Bulanan</option>
                                                    <option value="years">Tahunan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-1">
                                            <div class="form-group">
                                                <textarea id="textMessage" class="form-control"
                                                    placeholder="Keterangan tambahan" name="note" cols="45"
                                                    rows="8"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <button type="submit" class="btn btn-a">Book now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row section-t3">
                        <div class="col-sm-12">
                            <div class="title-box-d">
                                <h3 class="title-d">Note</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="property-agent">
                                <p class="color-text-a">
                                    Pastikan anda telah melakukan pembayaran dahulu sebelum melakukan konfirmasi. semua
                                    pembayaran atas nama <b>Dpavillon</b> . selain itu di luar tanggung jawab kami. semua
                                    deskripsi kamar diatas sudah termasuk pembayaran.
                                </p>
                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between">
                                        <strong>BNI:</strong>
                                        <span class="color-text-a">(222) 4568932</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>BCA:</strong>
                                        <span class="color-text-a">777 287 378 737</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Mandiri:</strong>
                                        <span class="color-text-a">annabella@example.com</span>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Property Single-->
@endsection
