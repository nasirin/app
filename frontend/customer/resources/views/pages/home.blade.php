@extends('layouts.home')

@section('intro')
    @include('partials.intro')
@endsection

@section('content')
    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Best Indekos <?= $location ? 'In : ' . $location : null ?></h2>
                        </div>
                        <div class="title-link">
                            <a href="/best-rooms">All Property
                                <span class="bi bi-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="property-carousel" class="swiper">
                <div class="swiper-wrapper">
                    @foreach ($carousel as $item)
                        <div class="carousel-item-b swiper-slide">
                            <div class="card-box-a card-shadow">
                                <div class="img-box-a">
                                    <img src="{{ $item['url'] . $item['thumbnail'] }}" alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="#">{{ $item['location'] }}
                                                    <br /> Kos {{ $item['type'] }}</a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <span class="price-a">rent/month |
                                                    {{ 'Rp ' . number_format($item['price_monthly'], 0, ',', '.') }}</span>
                                            </div>
                                            <a href="/template/#" class="link-a">Click for detail
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
                                                    <span>{{ $item['status'] }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
            <div class="propery-carousel-pagination carousel-pagination"></div>

        </div>
    </section><!-- End Latest Properties Section -->
@endsection
