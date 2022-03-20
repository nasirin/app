@extends('layouts.checkout')

@section('content')
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Konfirmasi pembayaran</h1>
                        <span class="color-text-a">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed nam
                            aspernatur unde provident, aliquam recusandae sunt! Iusto praesentium dolores laborum
                            similique alias quia eum, unde odio harum vitae corporis rem.</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Contact
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="agent-single mb-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="agent-avatar-box">
                                <img src="{{ $checkout['room']['url'] . $checkout['room']['thumbnail'] }}" alt=""
                                    class="agent-avatar img-fluid">
                            </div>
                        </div>
                        <div class="col-md-5 section-md-t3">
                            <div class="agent-info-box">
                                <div class="agent-title">
                                    <div class="title-box-d">
                                        <h3 class="title-d">{{ 'Kos ' . $checkout['room']['type'] }}
                                        </h3>
                                    </div>
                                </div>
                                <div class="agent-content mb-3">
                                    <p class="content-d color-text-a">
                                        Segera lakukan pembayaran dan dapatkan hunian nyaman
                                    </p>
                                    <div class="info-agents color-a">
                                        <p>
                                            <strong>Location </strong>
                                            <span class="color-text-a"> {{ $checkout['room']['location'] }} </span>
                                        </p>
                                        <p>
                                            <strong>Price/month: </strong>
                                            <span class="color-text-a">
                                                {{ 'Rp ' . number_format($checkout['room']['price'], 0, ',', '.') }}</span>
                                        </p>
                                        <p>
                                            <strong>Rental type: </strong>
                                            <span class="color-text-a"> {{ $checkout['rental_type'] }}</span>
                                        </p>
                                        <p>
                                            <strong>Total Price: </strong>
                                            <span class="color-text-a">
                                                {{ 'Rp ' . number_format($checkout['cost'], 0, ',', '.') }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mb-5">
                    <div class="row">
                        <div class="col-md-7">
                            <form action="/checkout/{{ $checkout['id'] }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg form-control-a"
                                                placeholder="Your Name"
                                                value="{{ session('user.first_name') . ' ' . session('user.last_name') }}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <input name="email" class="form-control form-control-lg form-control-a"
                                                placeholder="Your Email" value="{{ session('user.email') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <input type="file" name="struck"
                                                class="form-control form-control-lg form-control-a" placeholder="Subject"
                                                required accept="image/png,image/jpg,image/jpeg">
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-a">Confirmation</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5 section-md-t3">
                            <div class="icon-box section-b2">
                                <div class="icon-box-icon">
                                    <span class="bi bi-envelope"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">Say Hello</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <p class="mb-1">Email.
                                            <span class="color-a">contact@example.com</span>
                                        </p>
                                        <p class="mb-1">Phone.
                                            <span class="color-a">+54 356 945234</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box section-b2">
                                <div class="icon-box-icon">
                                    <span class="bi bi-geo-alt"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">Find us in</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <p class="mb-1">
                                            Manhattan, Nueva York 10036,
                                            <br> EE. UU.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box">
                                <div class="icon-box-icon">
                                    <span class="bi bi-share"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">Social networks</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <div class="socials-footer">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-one">
                                                        <i class="bi bi-facebook" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-one">
                                                        <i class="bi bi-twitter" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-one">
                                                        <i class="bi bi-instagram" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-one">
                                                        <i class="bi bi-linkedin" aria-hidden="true"></i>
                                                    </a>
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
        </div>
    </section>
@endsection
