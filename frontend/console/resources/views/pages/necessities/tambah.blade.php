@extends('layouts.home')
@section('content')
<div class="pagetitle">
    <h1>Create new Necessity</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Forms Necessity</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Necessity</h5>

                    <!-- General Form Elements -->
                    <form>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Necessity</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" required name="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Cost</label>
                            <div class="col-sm-10">
                                <input type="" class="form-control" required name="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Date</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Sum</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password" required>
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