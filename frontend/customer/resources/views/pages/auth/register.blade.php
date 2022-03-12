@extends('layouts.auth.auth')

@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="/register">
                    @csrf
                    <span class="login100-form-title p-b-43">
                        Create a new account
                    </span>


                    <div class="wrap-input100 validate-input" data-validate="column cannot be empty">
                        <input class="input100" type="text" name="first_name" value="{{ old('first_name') }}">
                        <span class="focus-input100"></span>
                        <span class="label-input100">First name
                            @if ($errors->first('first_name'))
                                <span style="color: red">| {{ $errors->first('first_name') }}</span>
                            @endif
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="column cannot be empty">
                        <input class="input100" type="text" name="last_name" value="{{ old('last_name') }}">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Last name
                            @if ($errors->first('last_name'))
                                <span style="color: red">| {{ $errors->first('last_name') }}</span>
                            @endif
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="column cannot be empty">
                        <input class="input100" type="text" name="nick_name" value="{{ old('nick_name') }}">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Nick name
                            @if ($errors->first('nick_name'))
                                <span style="color: red">| {{ $errors->first('nick_name') }}</span>
                            @endif
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="column cannot be empty">
                        <input class="input100" type="text" name="jobs" value="{{ old('jobs') }}">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Job
                            @if ($errors->first('jobs'))
                                <span style="color: red">| {{ $errors->first('jobs') }}</span>
                            @endif
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="column cannot be empty">
                        <input class="input100" type="text" name="address" value="{{ old('address') }}">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Address
                            @if ($errors->first('address'))
                                <span style="color: red">| {{ $errors->first('address') }}</span>
                            @endif
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="column cannot be empty">
                        <input class="input100" type="text" name="phone" value="{{ old('phone') }}">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Phone number
                            @if ($errors->first('phone'))
                                <span style="color: red">| {{ $errors->first('phone') }}</span>
                            @endif
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: wrong email format">
                        <input class="input100" type="email" name="email" value="{{ old('email') }}">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email
                            @if ($errors->first('email'))
                                <span style="color: red">| {{ $errors->first('email') }}</span>
                            @endif
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" value="{{ old('password') }}">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password
                            @if ($errors->first('password'))
                                <span style="color: red">| {{ $errors->first('password') }}</span>
                            @endif
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Gender is required">
                        <label for="">Gender</label>
                        <select name="gender" id="" class="form-control input100">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Status is required">
                        <label for="">Status</label>
                        <select name="status" id="" class="form-control input100">
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
