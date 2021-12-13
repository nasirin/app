@extends('layouts.home')

@section('content')
<div class="pagetitle">
    <h1>Data Reservations</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Reservation</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body my-2">

                    <!-- Table with stripped rows -->
                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">No Room</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Check in</th>
                                <th scope="col">Payment Type</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Brandon Jacob</td>
                                <td>Designer</td>
                                <td>28</td>
                                <td>2016-05-25</td>
                                <td>2016-05-25</td>
                                <td>2016-05-25</td>
                            </tr>

                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>


        </div>
    </div>
</section>
@endsection