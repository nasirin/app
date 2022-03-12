@extends('layouts.home');

@section('content')
    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">{{ session('user.nick_name') }}</h1>
                        <span class="color-text-a">{{ session('user.gender') }}</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Intro Single -->

    <!-- ======= Agent Single ======= -->
    <section class="agent-single">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="agent-avatar-box">
                                <img src="/user-default.png" alt="" class="agent-avatar img-fluid">
                            </div>
                        </div>
                        <div class="col-md-5 section-md-t3">
                            <div class="agent-info-box">
                                <div class="agent-title">
                                    <div class="title-box-d">
                                        <h3 class="title-d">
                                            {{ session('user.first_name') . ' ' . session('user.last_name') }}
                                        </h3>
                                    </div>
                                </div>
                                <div class="agent-content mb-3">

                                    <div class="info-agents color-a">
                                        <p>
                                            <strong>Status: </strong>
                                            <span class="color-text-a"> {{ session('user.status') }} </span>
                                        </p>
                                        <p>
                                            <strong>Job: </strong>
                                            <span class="color-text-a"> {{ session('user.jobs') }} </span>
                                        </p>
                                        <p>
                                            <strong>Phone: </strong>
                                            <span class="color-text-a"> {{ session('user.phone') }} </span>
                                        </p>
                                        <p>
                                            <strong>Email: </strong>
                                            <span class="color-text-a"> {{ session('user.email') }}</span>
                                        </p>
                                        <p>
                                            <strong>Address: </strong>
                                            <span class="color-text-a"> {{ session('user.address') }}</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="socials-footer">
                                    <a href="" class="btn btn-success">Ubah</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 section-t8">
                    
                    <div class="title-box-d">
                        <h3 class="title-d">My Indekos</h3>
                    </div>
                </div>
                <div class="row property-grid grid">
                    <div class="col-md-4">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="/template/assets/img/property-1.jpg" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="#">204 Mount
                                                <br /> Olive Road Two</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">rent | $ 12.000</span>
                                        </div>
                                        <div class="price-box d-flex">
                                            <span class="price-a">active until | 12 oct 2022</span>
                                        </div>
                                        <a href="/detail/slug" class="link-a">Click here to view
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
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Agent Single -->
@endsection
