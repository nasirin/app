@extends('layouts.home')

@section('content')
<div class="pagetitle">
    <h1>Data Necessities</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Necessities</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            @include('partials.alertSuccess')
            <div class="card">
                <div class="card-body">
                    <a href="/necessities/create" class="btn  btn-primary btn-sm my-2">Add Necessities</a>

                    <!-- Table with stripped rows -->
                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Necessity</th>
                                <th scope="col">Cost</th>
                                <th scope="col">Date</th>
                                <th scope="col">Pcs</th>
                                <th scope="col">Sum</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($necessities as $key => $data)
                            <tr>
                                <th scope="row">{{$key + 1}}</th>
                                <td>{{$data['necessity']}}</td>
                                <td>{{$data['cost']}}</td>
                                <td>{{$data['tanggal']}}</td>
                                <td>{{$data['pcs']}}</td>
                                <td>{{$data['total']}}</td>
                                <td>
                                    <a href="{{url('necessities/'.$data['id'].'/edit')}}" class="btn btn-warning btn-sm"> <i class="bx bxs-edit"></i></a>
                                    <form action="{{url('necessities/'.$data['id'])}}" method="POST" class="d-inline">
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