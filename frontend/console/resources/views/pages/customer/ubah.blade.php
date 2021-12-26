@extends('layouts.home')
@section('content')
<div class="pagetitle">
    <h1>Masukan customer baru</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Forms customer</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form customer</h5>

                    <!-- General Form Elements -->
                    <form action="{{url('customer/'.$customer['id'])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">First name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="first_name" value="{{$customer['first_name']}}">
                                @if($errors->first('first_name'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('first_name')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Last name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="last_name" value="{{$customer['last_name']}}">
                                @if($errors->first('last_name'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('last_name')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nick name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nick_name" value="{{$customer['nick_name']}}">
                                @if($errors->first('nick_name'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('nick_name')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="address" value="{{$customer['address']}}">
                                @if($errors->first('address'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('address')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="phone" value="{{$customer['phone']}}">
                                @if($errors->first('phone'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('phone')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" value="{{$customer['email']}}">
                                @if($errors->first('email'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('email')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password">
                                @if($errors->first('password'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('password')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                        </div>

                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male" <?= $customer['gender'] == 'male' ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="gridRadios1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female" <?= $customer['gender'] == 'female' ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="gridRadios2">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="gridRadios4" value="single" <?= $customer['status'] == 'single' ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="gridRadios1">
                                        Single
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="gridRadios3" value="married" <?= $customer['status'] == 'married' ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="gridRadios2">
                                        Married
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Jobs</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jobs" id="gridRadios5" value="student" <?= $customer['jobs'] == 'student' ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="gridRadios1">
                                        Student
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jobs" id="gridRadios6" value="worker" <?= $customer['jobs'] == 'worker' ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="gridRadios2">
                                        Worker
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Photo</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="formFile" name="avatar" accept="image/jpg, image/jpeg, image/png">
                                @if($errors->first('avatar'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('avatar')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Identity</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="formFile" name="identity" accept="image/jpg, image/jpeg, image/png">
                                @if($errors->first('identity'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('identity')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit Form</button>
                            </div>
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection