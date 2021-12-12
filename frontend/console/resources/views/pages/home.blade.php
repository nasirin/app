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
                                    <h6>145</h6>
                                    <span class="small pt-1 fw-bold">Rp 1.000.000</span>
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
                                    <h6>Rp 3.264.000</h6>
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
                                    <h6>145</h6>
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
                                    <tr>
                                        <th scope="row"><a href="/template/#">#2457</a></th>
                                        <td>Brandon Jacob</td>
                                        <td>
                                            <a href="/template/#" class="text-primary">A001</a>
                                        </td>
                                        <td>13 oktober 2021 | 08:00</td>
                                        <td>On checkin</td>
                                        <td><span class="badge bg-warning">New</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="/template/#">#2147</a></th>
                                        <td>Bridie Kessler</td>
                                        <td>
                                            <a href="/template/#" class="text-primary">B012</a>
                                        </td>
                                        <td>12 januari 2022 | 12:00</td>
                                        <td>Transfer</td>
                                        <td><span class="badge bg-warning">new</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="/template/#">#2049</a></th>
                                        <td>Ashleigh Langosh</td>
                                        <td>
                                            <a href="/template/#" class="text-primary">C111</a>
                                        </td>
                                        <td>14 oktober 2021 | 09:00</td>
                                        <td>On checkin</td>
                                        <td><span class="badge bg-warning">New</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="/template/#">#2644</a></th>
                                        <td>Angus Grady</td>
                                        <td>
                                            <a href="/template/#" class="text-primar">A827</a>
                                        </td>
                                        <td>13 oktober 2021 | 21:00</td>
                                        <td>Transfer</td>
                                        <td><span class="badge bg-warning">New</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="/template/#">#2644</a></th>
                                        <td>Raheem Lehner</td>
                                        <td>
                                            <a href="/template/#" class="text-primary">A100</a>
                                        </td>
                                        <td>13 juli 2021 | 08:00</td>
                                        <td>On checkin</td>
                                        <td><span class="badge bg-warning">New</span></td>
                                    </tr>
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
                            <h5 class="card-title">Grace Booking</h5>

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
                                    <tr>
                                        <th scope="row"><a href="/template/#">#2457</a></th>
                                        <td>Brandon Jacob</td>
                                        <td>
                                            <a href="/template/#" class="text-primary">A001</a>
                                        </td>
                                        <td>13 oktober 2021</td>
                                        <td>Rp 900.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="/template/#">#2147</a></th>
                                        <td>Bridie Kessler</td>
                                        <td>
                                            <a href="/template/#" class="text-primary">B012</a>
                                        </td>
                                        <td>12 januari 2022</td>
                                        <td>Rp 900.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="/template/#">#2049</a></th>
                                        <td>Ashleigh Langosh</td>
                                        <td>
                                            <a href="/template/#" class="text-primary">C111</a>
                                        </td>
                                        <td>14 oktober 2021</td>
                                        <td>Rp 200.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="/template/#">#2644</a></th>
                                        <td>Angus Grady</td>
                                        <td>
                                            <a href="/template/#" class="text-primar">A827</a>
                                        </td>
                                        <td>13 oktober 2021</td>
                                        <td>Rp 500.000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="/template/#">#2644</a></th>
                                        <td>Raheem Lehner</td>
                                        <td>
                                            <a href="/template/#" class="text-primary">A100</a>
                                        </td>
                                        <td>13 juli 2021</td>
                                        <td>Rp 1.000.000</td>
                                    </tr>
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