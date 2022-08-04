@extends('layouts.home');

@section('content')
    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">{{ session('user.nick_name') }}</h1>
                        <span class="color-text-a">{{ session('user.gender') }}</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                                <a href="/">/Ubah</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Intro Single -->

    <!-- ======= Agent Single ======= -->
    <section class="agent-single">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="agent-avatar-box">
                                <img src="/user-default.png" alt="" class="agent-avatar img-fluid">
                            </div>
                        </div>
                        <div class="col-md-5 section-md-t3">
                            <form class="form-a" method="POST" action="/profile/ubah">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 mb-1">
                                        <div class="form-group">
                                            <label for="">First name</label>
                                            <input type="text" class="form-control form-control-lg form-control-a"
                                                id="inputName" required name="first_name"
                                                value="<?= session('user.first_name') ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-1">
                                        <div class="form-group">
                                            <label for="">Last name</label>
                                            <input type="text" class="form-control form-control-lg form-control-a"
                                                id="inputName" required name="last_name"
                                                value="<?= session('user.last_name') ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-1">
                                        <div class="form-group">
                                            <label for="">Nick name</label>
                                            <input type="text" class="form-control form-control-lg form-control-a"
                                                id="inputName" required name="nick_name"
                                                value="<?= session('user.nick_name') ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-1">
                                        <div class="form-group">
                                            <label for=""> Job</label>
                                            <input type="text" class="form-control form-control-lg form-control-a"
                                                id="inputName" required name="jobs" value="<?= session('user.jobs') ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-1">
                                        <div class="form-group">
                                            <label for="">Adress</label>
                                            <input type="text" class="form-control form-control-lg form-control-a"
                                                id="inputName" required name="address"
                                                value="<?= session('user.address') ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-1">
                                        <div class="form-group">
                                            <label for="">Phone</label>
                                            <input type="text" class="form-control form-control-lg form-control-a"
                                                id="inputName" required name="phone" value="<?= session('user.phone') ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-1">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="text" class="form-control form-control-lg form-control-a"
                                                id="inputName" required name="email" value="<?= session('user.email') ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-1">
                                        <div class="form-group">
                                            <label for="">Gender</label>
                                            <select name="gender" class="form-control form-control-lg form-control-a">
                                                <option
                                                    value="male"<?= session('user.gender') == 'male' ? 'selected' : '' ?>>
                                                    Male</option>
                                                <option value="female"
                                                    <?= session('user.gender') == 'female' ? 'selected' : '' ?>>Female
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-1">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select name="status" class="form-control form-control-lg form-control-a">
                                                <option value="married"
                                                    <?= session('user.status') == 'married' ? 'selected' : '' ?>>Married
                                                </option>
                                                <option value="single"
                                                    <?= session('user.status') == 'single' ? 'selected' : '' ?>>Single
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <button type="submit" class="btn btn-a">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Agent Single -->
@endsection
