@extends('layouts.home')
@section('content')
<div class="pagetitle">
    <h1>Update rooms</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Forms room</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-12">
            <!-- General Form Elements -->
            <form action="{{url('/room/'.$rooms['id'])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Detail room</h5>
                    </div>
                    <div class="card-body">


                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">No Room</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="no_room" required value="{{$rooms['no_room']}}">
                                @if($errors->first('no_room'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('no_room')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Location</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="location" required value="{{$rooms['location']}}">
                                @if($errors->first('location'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('location')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Map link</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="map" required value="{{$rooms['map']}}">
                                @if($errors->first('map'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('map')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Size</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="room_size" placeholder="example : 4 x 4" required value="{{$rooms['room_size']}}">
                                @if($errors->first('room_size'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('room_size')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Monthly</label>
                                    <div class="col-sm-10">
                                        <input type="number" min="0" class="form-control" name="price_monthly" required value="{{$rooms['price_monthly']}}">
                                        @if($errors->first('price_monthly'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <i class="bi bi-exclamation-octagon me-1"></i>
                                            {{$errors->first('price_monthly')}}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">years</label>
                                    <div class="col-sm-10">
                                        <input type="number" min="0" class="form-control" name="price_years" value="{{$rooms['price_years']}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Thumbnail</label>
                            <div class="col-sm-10">
                                <div class="row align-items-center">
                                    <img src="{{url('storage/'.$rooms['thumbnail'])}}" alt="" class="mb-2 col-sm-4">
                                    <div class="col-sm-8">
                                        <input type="file" accept="image/jpg,image/png,image/jpeg" class="form-control" name="thumbnail">
                                    </div>
                                </div>
                                @if($errors->first('thumbnail'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('thumbnail')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Photos</label>
                            <div class="col-sm-10">
                                <input type="file" accept="image/jpg,image/png,image/jpeg" class="form-control" name="gallery[]" multiple>
                                @foreach($rooms['gallery'] as $gallery)
                                <img src="{{url('storage/'.$gallery['path'])}}" alt="" width="100" class="mt-2">
                                @endforeach
                                @if($errors->first('gallery'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{$errors->first('gallery')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                        </div>
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">type</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type" id="gridRadios1" value="male" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type" id="gridRadios2" value="female">
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
                                    <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="available" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Available
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="unavailable">
                                    <label class="form-check-label" for="gridRadios2">
                                        Unavailable
                                    </label>
                                </div>
                            </div>
                        </fieldset>

                    </div>
                    <div class="card-body">

                        <h5 class="card-title">Fasilities</h5>
                        <div class="row mb-3">
                            @if($errors->first('fasilities_id'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="bi bi-exclamation-octagon me-1"></i>
                                {{$errors->first('fasilities_id')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            @foreach($fasilities as $fasility)
                            <div class="col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilities_id[]" value="{{$fasility['id']}}" id="{{$fasility['fasility']}}">
                                    <label class="form-check-label" for="{{$fasility['fasility']}}"> <i class="{{$fasility['icon']}}"></i> {{$fasility["fasility"]}}</label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>
@endsection