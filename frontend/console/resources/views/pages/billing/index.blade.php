@extends('layouts.home')

@section('content')
    <div class="pagetitle">
        <h1>Data Billings</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Billings</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body my-2">

                        <!-- Table with stripped rows -->
                        <table class="table myTable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">No Room</th>
                                    <th scope="col">Cost</th>
                                    <th scope="col">Payment due</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($billing as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item['booking']['customer']['nick_name'] }}</td>
                                        <td>{{ $item['booking']['room']['no_room'] }}</td>
                                        <td>{{ 'Rp ' . number_format($item['total'], 0, ',', '.') }}</td>
                                        <td>{{ $item['payment_due'] }}</td>
                                        <td>{{ $item['payment_status'] }}</td>
                                        <td>
                                            <a href="/billing/{{ $item['id'] }}" class="btn btn-info btn-sm"> <i
                                                    class="ri-eye-2-line"></i></a>
                                            @if (session('user.level') == 'pimpinan')
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

                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
