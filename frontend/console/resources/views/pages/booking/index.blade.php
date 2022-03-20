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
                                @foreach ($booking as $key => $value)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $value['room']['no_room'] }}</td>
                                        <td>{{ $value['customer']['nick_name'] }}</td>
                                        <td>{{ $value['check_in'] }}</td>
                                        <td>{{ $value['payment_type'] }}</td>
                                        <td>{{ $value['payment_status'] }}</td>
                                        <td>
                                            <a href="/booking/{{ $value['id'] }}" class="btn btn-info btn-sm"> <i
                                                    class="ri-eye-2-line"></i></a>
                                            @if (session('user.id') != $value['id'])
                                                <a href="{{ url('admin/' . $value['id'] . '/edit') }}"
                                                    class="btn btn-warning btn-sm"> <i class="bx bxs-edit"></i></a>
                                                <form action="#" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button onclick="return confirm('apakah anda yakin?')"
                                                        class="btn btn-danger btn-sm"><i
                                                            class="bx bxs-trash"></i></button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
