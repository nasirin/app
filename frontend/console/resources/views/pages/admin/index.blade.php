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
                    <a href="/admin/create" class="btn  btn-primary btn-sm my-2">Tambah admin</a>

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
                            <?php foreach ($admin as $data) : ?>
                                <tr>
                                    <th scope="row"><?= $data['id'] ?></th>
                                    <td><?= $data['fullname'] ?></td>
                                    <td><?= $data['level']?></td>
                                    <td><?= $data['email']?></td>
                                    <td><?= $data['phone']?></td>
                                    <td>
                                        
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