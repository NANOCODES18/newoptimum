@extends('layouts.customlayout')

@section('body')
    <style>
        .invalid-feedback {
            color: red;
        }
    </style>
    <section class="before-panel">
        <p><a href="{{ route('register') }}" class="signup-breadcrumb">Register</a></p>
        <img src="user/assets/images/earth.png" alt="" class="spin-city">
    </section>
    <!-- space div -->
    <div class="signup-breadcrumb-line-div"></div>

    <section class="signup-panel">
        <div class="signup-panel-button">
            <a class="signup-button sign-up" href="{{ route('login') }}">Login</a>
            <a class="signup-button sign-up" href="{{ route('register') }}">Register</a>
        </div>


        <form class="form-field" method="post" action="{{ route('register') }}">
            @csrf
            <input type="text" hidden name="refid"
                value="@php
                                        if (isset($_GET['refid'])) {
                                            echo $_GET['refid'];
                                        }
                                    @endphp"
                id="">
            <div class="signup-form-body">
                <label for="name">Name
                    <input id="name" type="text"
                        class="form-control number-input input @error('name') is-invalid @enderror" name="name"
                        placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </label>
                <label for="phone_number">Phone Number
                    <input type="number" placeholder="Phone number" value="" class="number-input input"
                        id="number" name="phone" required autocomplete="phone">

                </label>
                <label for="email">E-Mail
                    <input id="email" type="email" placeholder="Email"
                        class="form-control number-input input @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                </label>
                <label for="country">Country

                    <input class="country-input input" id="Country" type="text" placeholder="Country"
                        class="form-control @error('country') is-invalid @enderror" name="Country" required
                        autocomplete="Country">

                    @error('country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    {{-- <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i> --}}
                </label>
                <label for="password">Password
                    <input id="password" type="password" placeholder="Password"
                        class="form-control country-input input @error('password') is-invalid @enderror" name="password"
                        required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>
                <label for="country">Confirm Password
                    <input id="password-confirm" class="input" type="password" class="form-control"
                        placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                </label>
            </div>
            <div class="signup-referral-section">
                <p>Referral Code</p>
                <div class="code-section">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="signup-form-footer">

                <button type="submit" class="signup-footer-button">Register</button>
            </div>
            <!-- <a class="create-text-action" href="#"> Create An Account </a> -->
        </form>
    </section>
    </div>
    <div class="on-it"></div>
@endsection
