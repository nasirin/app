@extends('layouts.home')

@section('content')
<div class="pagetitle">
    <h1>Data Admin</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Data</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">

                    <a href="{{route('admin.create')}}" class="btn  btn-primary btn-sm my-2"><i class="bx bxs-file-plus"></i>Tambah admin</a>

                    <!-- Table with stripped rows -->
                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($admin as $key => $value) : ?>
                                <tr>
                                    <th scope="row"><?= $key + 1 ?></th>
                                    <td><?= $value['fullname'] ?></td>
                                    <td><?= $value['level'] ?></td>
                                    <td><?= $value['email'] ?></td>
                                    <td><?= $value['phone'] ?></td>
                                    <td>
                                        <a href="{{url('admin/'.$value['id'])}}" class="btn btn-warning btn-sm"> <i class="bx bxs-edit"></i></a>
                                        <form action="{{url('admin/'.$value['id'])}}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button onclick="return confirm('apakah anda yakin?')" class="btn btn-danger btn-sm"><i class="bx bxs-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection