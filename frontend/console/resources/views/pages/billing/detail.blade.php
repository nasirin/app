@extends('layouts.home')

@section('content')
    <div class="pagetitle">
        <h1>Billing detail</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Billing</li>
                <li class="breadcrumb-item active">Detail</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="/happy-customer.png" alt="Profile" class="rounded-circle">
                        <h2>{{ $billing['booking']['customer']['nick_name'] }}</h2>
                        <h3>{{ $billing['booking']['customer']['gender'] }}</h3>
                        <h3>{{ $billing['booking']['customer']['email'] }}</h3>
                        <h3>{{ $billing['booking']['customer']['phone'] }}</h3>
                        <h3>{{ $billing['booking']['customer']['address'] }}</h3>
                        <h3>{{ $billing['booking']['customer']['jobs'] }}</h3>
                        @if ($billing['booking']['payment_status'] == 'waiting confirm')
                            <a href="/confirm/{{ $billing['id'] }}" class="btn btn-primary">Confirm</a>
                        @endif
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Overview</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-edit">Additional</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#billing">Billing</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">Details</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">No Room</div>
                                    <div class="col-lg-9 col-md-8">{{ $billing['booking']['room']['no_room'] }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Rental type</div>
                                    <div class="col-lg-9 col-md-8">{{ $billing['booking']['rental_type'] }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Check in</div>
                                    <div class="col-lg-9 col-md-8">{{ $billing['booking']['check_in'] }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Payment status</div>
                                    <div class="col-lg-9 col-md-8">{{ $billing['booking']['payment_status'] }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Total Payment</div>
                                    <div class="col-lg-9 col-md-8">
                                        {{ 'Rp ' . number_format($billing['booking']['cost'], 0, ',', '.') }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Payment proof</div>
                                    <div class="col-lg-9 col-md-8">
                                        <img src="{{ $billing['booking']['file_payment'] }}" width="200" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                @if ($billing['payment_status'] != 'success')
                                    <p>Konfirmasi dulu sebelum mengisi additional</p>
                                @else
                                    <form action="/additional" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $billing['id'] }}" name="billing_id">
                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-4 col-form-label">Additional</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="additional" required
                                                    value="{{ old('additional') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-4 col-form-label">Cost</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="cost" required
                                                    value="{{ old('cost') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Additional</th>
                                                <th scope="col">Cost</th>
                                                <th scope="col">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($billing['booking']['booking_additional'] as $key => $value)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $value['additional'] }}</td>
                                                    <td>{{ 'Rp ' . number_format($value['cost'], 0, ',', '.') }}</td>
                                                    <td>
                                                        <form action="/additional/{{ $value['id'] }}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button onclick="return confirm('apakah anda yakin?')"
                                                                class="btn btn-danger btn-sm"><i
                                                                    class="bx bxs-trash"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Total Cost</th>
                                                <td colspan="3">Rp 123.123.123</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                @endif
                            </div>

                            <div class="tab-pane fade profile-edit pt-3" id="billing">
                                <form action="/billing/{{ $billing['id'] }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-info">Confirm</button>
                                </form>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Cost</th>
                                            <th scope="col">Due</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allBilling as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ 'Rp ' . number_format($item['total'], 0, ',', '.') }}</td>
                                                <td>{{ date('d M Y', strtotime($item['payment_due'])) }}</td>
                                                <td>
                                                    <form action="/billing/{{ $item['id'] }}" method="POST">
                                                        @csrf @method('delete')
                                                        <button onclick="return confirm('apakah anda yakin?')"
                                                            class="btn btn-danger btn-sm"><i
                                                                class="bx bxs-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
