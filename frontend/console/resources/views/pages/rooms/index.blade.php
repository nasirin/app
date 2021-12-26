@extends('layouts.home')

@section('content')
<div class="pagetitle">
    <h1>Data Rooms</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">rooms</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            @include('partials.alertSuccess')

            <div class="card">
                <div class="card-body">
                    <a href="/room/create" class="btn  btn-primary btn-sm my-2">Add Room</a>

                    <!-- Table with stripped rows -->
                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">No Room</th>
                                <th scope="col">Location</th>
                                <th scope="col">Type</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rooms as $key => $room)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$room["no_room"]}}</td>
                                <td>{{$room["location"]}}</td>
                                <td>{{$room["type"]}}</td>
                                <td>{{$room["status"]}}</td>
                                <td>
                                    <a href="{{url('room/'.$room['id'])}}" class="btn btn-info btn-sm"> <i class="ri-eye-2-line"></i></a>
                                    <a href="{{url('room/'.$room['id'].'/edit')}}" class="btn btn-warning btn-sm"> <i class="bx bxs-edit"></i></a>
                                    <form action="{{url('room/'.$room['id'])}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button onclick="return confirm('apakah anda yakin?')" class="btn btn-danger btn-sm"><i class="bx bxs-trash"></i></button>
                                    </form>
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