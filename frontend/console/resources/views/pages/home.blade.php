@extends('layouts.home')

@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/template//">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

<section class="section dashboard">
    <div class="row">
        <!-- Left side columns -->
        <div class="col-12">
            <div class="row">
                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">
                                Necessities item <span>| This Month</span>
                            </h5>

                            <div class="d-flex align-items-center">
                                <div class="
                          card-icon
                          rounded-circle
                          d-flex
                          align-items-center
                          justify-content-center
                        ">
                                    <i class="bi bi-cart"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{$summary['kebutuhan']['totalItem']}}</h6>
                                    <span class="small pt-1 fw-bold">{{'Rp '.number_format($summary['kebutuhan']['totalPengeluaran'],0,',','.')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">
                                Revenue <span>| This Month</span>
                            </h5>

                            <div class="d-flex align-items-center">
                                <div class="
                          card-icon
                          rounded-circle
                          d-flex
                          align-items-center
                          justify-content-center
                        ">
                                    <i class="bi bi-currency-dollar"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{'Rp '.number_format($summary['pendapatan'],0,',','.')}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-xxl-4 col-xl-12">
                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <h5 class="card-title">Customers</h5>

                            <div class="d-flex align-items-center">
                                <div class="
                          card-icon
                          rounded-circle
                          d-flex
                          align-items-center
                          justify-content-center
                        ">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{$summary['totalCustomer']}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Customers Card -->

                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales">
                        <div class="filter">
                            <a class="icon" href="/template/#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="
                        dropdown-menu dropdown-menu-end dropdown-menu-arrow
                      ">
                                <li class="dropdown-header text-start">
                                    <h6>Action</h6>
                                </li>

                                <li><a class="dropdown-item" href="/template/#">Open</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">New Booking</h5>

                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Room</th>
                                        <th scope="col">Check in</th>
                                        <th scope="col">Payment Type</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($newBooking as $key => $data)
                                    <tr>
                                        <th scope="row">{{$key+1}}</th>
                                        <td>{{$data['customer']['nick_name']}}</td>
                                        <td>
                                            <a href="#" class="text-primary">{{$data['room']['no_room']}}</a>
                                        </td>
                                        <td>{{$data['check_in']}}</td>
                                        <td>{{$data['payment_type']}}</td>
                                        <td><span class="badge bg-warning">Waiting Confirm</span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card recent-sales">
                        <div class="filter">
                            <a class="icon" href="/template/#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="
                        dropdown-menu dropdown-menu-end dropdown-menu-arrow
                      ">
                                <li class="dropdown-header text-start">
                                    <h6>Action</h6>
                                </li>

                                <li><a class="dropdown-item" href="/template/#">Open</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Grace Billing</h5>

                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Room</th>
                                        <th scope="col">Due</th>
                                        <th scope="col">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($graceBilling as $key => $data)
                                    <tr>
                                        <th scope="row">{{$key + 1}}</th>
                                        <td>{{$data['booking']['customer']['nick_name']}}</td>
                                        <td>
                                            {{$data['booking']['room']['no_room']}}
                                        </td>
                                        <td>{{$data['payment_due']}}</td>
                                        <td>{{$data['total']}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Left side columns -->

        <!-- Right side columns -->

        <!-- End Right side columns -->
    </div>
</section>
@endsection