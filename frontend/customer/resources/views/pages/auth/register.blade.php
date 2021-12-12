@extends('layouts.auth.auth')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form">
                <span class="login100-form-title p-b-43">
                    Create a new account
                </span>


                <div class="wrap-input100 validate-input" data-validate="column cannot be empty">
                    <input class="input100" type="text" name="email">
                    <span class="focus-input100"></span>
                    <span class="label-input100">First name</span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="column cannot be empty">
                    <input class="input100" type="text" name="email">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Last name</span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="column cannot be empty">
                    <input class="input100" type="text" name="email">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Nick name</span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="column cannot be empty">
                    <input class="input100" type="text" name="email">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Address</span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="column cannot be empty">
                    <input class="input100" type="text" name="email">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Phone number</span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Valid email is required: wrong email format">
                    <input class="input100" type="text" name="email">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Email</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="pass">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Password</span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <label for="">Gender</label>
                    <select name="" id="" class="form-control input100">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <label for="">Status</label>
                    <select name="" id="" class="form-control input100">
                        <option value="single">Single</option>
                        <option value="female">Married</option>
                    </select>
                </div>
                <div class="container-login100-form-btn" style="background-color: greenyellow;">
                    <button class="login100-form-btn">
                        Register
                    </button>
                </div>

                <div class="text-center p-t-46 p-b-20">
                    <span class="txt2">
                        <a href="/login">
                            Alredy have account
                        </a>
                    </span>
                </div>
            </form>

            <div class="login100-more" style="background-image: url('/auth/register-bg.jfif');">
            </div>
        </div>
    </div>
</div>
@endsection