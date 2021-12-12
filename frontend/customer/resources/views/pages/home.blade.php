@extends('layouts.home')

@section('intro')
@include('partials.intro')
@endsection

@section('content')
<!-- ======= Services Section ======= -->
<section class="section-services section-t8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-a">Our Services</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card-box-c foo">
                    <div class="card-header-c d-flex">
                        <div class="card-box-ico">
                            <span class="bi bi-cart"></span>
                        </div>
                        <div class="card-title-c align-self-center">
                            <h2 class="title-c">Lifestyle</h2>
                        </div>
                    </div>
                    <div class="card-body-c">
                        <p class="content-c">
                            Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                            convallis a pellentesque
                            nec, egestas non nisi.
                        </p>
                    </div>
                    <div class="card-footer-c">
                        <a href="/template/#" class="link-c link-icon">Read more
                            <span class="bi bi-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box-c foo">
                    <div class="card-header-c d-flex">
                        <div class="card-box-ico">
                            <span class="bi bi-calendar4-week"></span>
                        </div>
                        <div class="card-title-c align-self-center">
                            <h2 class="title-c">Loans</h2>
                        </div>
                    </div>
                    <div class="card-body-c">
                        <p class="content-c">
                            Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Mauris blandit
                            aliquet elit, eget tincidunt
                            nibh pulvinar a.
                        </p>
                    </div>
                    <div class="card-footer-c">
                        <a href="/template/#" class="link-c link-icon">Read more
                            <span class="bi bi-calendar4-week"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box-c foo">
                    <div class="card-header-c d-flex">
                        <div class="card-box-ico">
                            <span class="bi bi-card-checklist"></span>
                        </div>
                        <div class="card-title-c align-self-center">
                            <h2 class="title-c">Sell</h2>
                        </div>
                    </div>
                    <div class="card-body-c">
                        <p class="content-c">
                            Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                            convallis a pellentesque
                            nec, egestas non nisi.
                        </p>
                    </div>
                    <div class="card-footer-c">
                        <a href="/template/#" class="link-c link-icon">Read more
                            <span class="bi bi-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Services Section -->

<!-- ======= Latest Properties Section ======= -->
<section class="section-property section-t8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-a">Best Indekos In <?= $location ?></h2>
                    </div>
                    <div class="title-link">
                        <a href="/template/property-grid.html">All Property
                            <span class="bi bi-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="property-carousel" class="swiper">
            <div class="swiper-wrapper">

                <div class="carousel-item-b swiper-slide">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="/template/assets/img/property-6.jpg" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="/template/property-single.html">206 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">rent | $ 12.000</span>
                                    </div>
                                    <a href="/template/#" class="link-a">Click here to view
                                        <span class="bi bi-chevron-right"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">Area</h4>
                                            <span>340m
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End carousel item -->

                <div class="carousel-item-b swiper-slide">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="/template/assets/img/property-3.jpg" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="/template/property-single.html">157 West
                                            <br /> Central Park</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">rent | $ 12.000</span>
                                    </div>
                                    <a href="/template/property-single.html" class="link-a">Click here to view
                                        <span class="bi bi-chevron-right"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">Area</h4>
                                            <span>340m
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End carousel item -->

                <div class="carousel-item-b swiper-slide">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="/template/assets/img/property-7.jpg" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="/template/property-single.html">245 Azabu
                                            <br /> Nishi Park let</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">rent | $ 12.000</span>
                                    </div>
                                    <a href="/template/property-single.html" class="link-a">Click here to view
                                        <span class="bi bi-chevron-right"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">Area</h4>
                                            <span>340m
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End carousel item -->

                <div class="carousel-item-b swiper-slide">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="/template/assets/img/property-10.jpg" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="/template/property-single.html">204 Montal
                                            <br /> South Bela Two</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">rent | $ 12.000</span>
                                    </div>
                                    <a href="/template/property-single.html" class="link-a">Click here to view
                                        <span class="bi bi-chevron-right"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">Area</h4>
                                            <span>340m
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End carousel item -->
            </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

    </div>
</section><!-- End Latest Properties Section -->

<!-- ======= Testimonials Section ======= -->
<section class="section-testimonials section-t8 nav-arrow-a">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-a">Testimonials</h2>
                    </div>
                </div>
            </div>
        </div>

        <div id="testimonial-carousel" class="swiper">
            <div class="swiper-wrapper">

                <div class="carousel-item-a swiper-slide">
                    <div class="testimonials-box">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="testimonial-img">
                                    <img src="/template/assets/img/testimonial-1.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="testimonial-ico">
                                    <i class="bi bi-chat-quote-fill"></i>
                                </div>
                                <div class="testimonials-content">
                                    <p class="testimonial-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                                        debitis hic ber quibusdam
                                        voluptatibus officia expedita corpori.
                                    </p>
                                </div>
                                <div class="testimonial-author-box">
                                    <img src="/template/assets/img/mini-testimonial-1.jpg" alt="" class="testimonial-avatar">
                                    <h5 class="testimonial-author">Albert & Erika</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End carousel item -->

                <div class="carousel-item-a swiper-slide">
                    <div class="testimonials-box">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="testimonial-img">
                                    <img src="/template/assets/img/testimonial-2.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="testimonial-ico">
                                    <i class="bi bi-chat-quote-fill"></i>
                                </div>
                                <div class="testimonials-content">
                                    <p class="testimonial-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                                        debitis hic ber quibusdam
                                        voluptatibus officia expedita corpori.
                                    </p>
                                </div>
                                <div class="testimonial-author-box">
                                    <img src="/template/assets/img/mini-testimonial-2.jpg" alt="" class="testimonial-avatar">
                                    <h5 class="testimonial-author">Pablo & Emma</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End carousel item -->

            </div>
        </div>
        <div class="testimonial-carousel-pagination carousel-pagination"></div>

    </div>
</section><!-- End Testimonials Section -->
@endsection