@extends('layouts.home')

@section('content')
<div class="pagetitle">
    <h1>Profile</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">customer</li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section profile">
    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                    <img src="{{url('template/assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
                    <h2>{{ucwords($customer['first_name'].' '.$customer['last_name'])}}</h2>
                    <h3>room</h3>
                </div>
            </div>

        </div>

        <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                        </li>

                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">Profile Details</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">First Name</div>
                                <div class="col-lg-9 col-md-8">{{$customer["first_name"]}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Last Name</div>
                                <div class="col-lg-9 col-md-8">{{$customer["last_name"]}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Nick Name</div>
                                <div class="col-lg-9 col-md-8">{{$customer["nick_name"]}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Address</div>
                                <div class="col-lg-9 col-md-8">{{$customer["address"]}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Phone</div>
                                <div class="col-lg-9 col-md-8">{{$customer["phone"]}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8">{{$customer["email"]}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Identity</div>
                                <div class="col-lg-9 col-md-8">{{$customer["identity"]}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Gender</div>
                                <div class="col-lg-9 col-md-8">{{$customer["gender"]}}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Status</div>
                                <div class="col-lg-9 col-md-8">{{$customer["status"]}}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Job</div>
                                <div class="col-lg-9 col-md-8">{{$customer["jobs"]}}</div>
                            </div>

                            <h5 class="card-title">Booking Details (DUMMY)</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Room</div>
                                <div class="col-lg-9 col-md-8">nomor kamar</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Room Cost </div>
                                <div class="col-lg-9 col-md-8">Rp 500.000 (bulan | tahun)</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Room Status </div>
                                <div class="col-lg-9 col-md-8">Active</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Additional</div>
                                <div class="col-lg-9 col-md-8">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Additional</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Tambahan 1</td>
                                                <td>Rp 12.000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Expired Date</div>
                                <div class="col-lg-9 col-md-8">20 agustus 2022</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Total</div>
                                <div class="col-lg-9 col-md-8">Rp 600.000</div>
                            </div>
                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                            <!-- Profile Edit Form -->
                            <form action="{{url('customer/'.$customer['id'])}}" method="POST">
                                @csrf
                                @method('patch')

                                <div class="row mb-3">
                                    <label for="inputText" class="col-md-4 col-lg-3 col-form-label">First name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="first_name" value="{{$customer['first_name']}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-md-4 col-lg-3 col-form-label">Last name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="last_name" value="{{$customer['last_name']}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-md-4 col-lg-3 col-form-label">Nick name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="nick_name" value="{{$customer['nick_name']}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="address" value="{{$customer['address']}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-md-4 col-lg-3 col-form-label">Phone Number</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="number" class="form-control" name="phone" value="{{$customer['phone']}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="email" class="form-control" name="email" value="{{$customer['email']}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-md-4 col-lg-3 col-form-label">Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>

                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                    <div class="col-md-8 col-lg-9">
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
                                    <div class="col-md-8 col-lg-9">
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
                                    <div class="col-md-8 col-lg-9">
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
                                    <label for="inputNumber" class="col-md-4 col-lg-3 col-form-label">Photo</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input class="form-control" type="file" id="formFile" name="avatar" accept="image/jpg, image/jpeg, image/png">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-md-4 col-lg-3 col-form-label">Identity</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input class="form-control" type="file" id="formFile" name="identity" accept="image/jpg, image/jpeg, image/png">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form><!-- End Profile Edit Form -->

                        </div>

                        <div class="tab-pane fade pt-3" id="profile-change-password">
                            <!-- Change Password Form -->
                            <form>

                                <div class="row mb-3">
                                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="password" type="password" class="form-control" id="currentPassword">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                </div>
                            </form><!-- End Change Password Form -->

                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection