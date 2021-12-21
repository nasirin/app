@extends('layouts.home')

@section('content')
<div class="pagetitle">
    <h1>Data Fasilites</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Fasilites</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header">
                    <form action="{{url('fasility')}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">New Fasilites</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" required name="fasility" placeholder="Insert new fasilities" required autofocus>
                                <input type="hidden" name="icon" value="bi bi-puzzle">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <!-- Table with stripped rows -->
                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Fasility</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($fasility as $key => $value)
                            <tr>
                                <th scope="row">{{$key + 1}}</th>
                                <td>{{$value['fasility']}}</td>
                                <td>
                                    <form action="{{url('fasility/'.$value['id'])}}" method="POST" class="d-inline">
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