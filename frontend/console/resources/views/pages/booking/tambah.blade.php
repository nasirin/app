@extends('layouts.home')
@section('content')
<div class="pagetitle">
    <h1>Add new booking</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Forms booking</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <!-- General Form Elements -->
                    <form action="{{url('booking')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row my-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Customer</label>
                            <div class="col-sm-10">
                                <select name="customers_id" class="form-control" required>
                                    <option value="">select customer</option>
                                    @foreach($customers as $customer)
                                    <option value="{{$customer['id']}}">{{$customer['first_name'].' '. $customer['last_name']}}</option>
                                    @endforeach
                                </select>
                                @if($errors->first('customers_id'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('customers_id')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row my-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Room</label>
                            <div class="col-sm-10">
                                <select name="room_id" class="form-control" required>
                                    <option value="">select room</option>
                                    @foreach($rooms as $room)
                                    <option value="{{$room['id']}}">{{$room['no_room']}}</option>
                                    @endforeach
                                </select>
                                @if($errors->first('room_id'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('room_id')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Check in</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="check_in" required value="{{old('check_in')}}">
                                @if($errors->first('check_in'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('check_in')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Guest</label>
                            <div class="col-sm-10">
                                <input type="number" min="0" class="form-control" name="guest">
                                @if($errors->first('guest'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('guest')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row my-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Payment type</label>
                            <div class="col-sm-10">
                                <select name="payment_type" class="form-control" required>
                                    <option value="on check in">on check in</option>
                                    <option value="transfer">transfer</option>
                                </select>
                                @if($errors->first('payment_type'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('payment_type')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Cost</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="cost" required>
                                @if($errors->first('cost'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('cost')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row my-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Rental type</label>
                            <div class="col-sm-10">
                                <select name="rental_type" class="form-control" required>
                                    <option value="month">Month</option>
                                    <option value="years">Years</option>
                                </select>
                                @if($errors->first('rental_type'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('rental_type')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row my-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Note</label>
                            <div class="col-sm-10">
                                <textarea name="note" class="form-control" cols="30" rows="10"></textarea>

                                @if($errors->first('note'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('note')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="formFile" name="file_payment" accept="image/jpg, image/jpeg, image/png">
                                @if($errors->first('file_payment'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('file_payment')}}
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