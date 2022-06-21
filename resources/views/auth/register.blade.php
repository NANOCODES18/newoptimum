@extends("layouts.customlayout")

@section('body')


<section class="before-panel">
    <p><a href="{{route('register')}}" class="signup-breadcrumb">Register</a></p>
    <img src="user/assets/images/earth.png" alt="" class="spin-city">
</section>
 <!-- space div -->
<div class="signup-breadcrumb-line-div"></div>

<section class="signup-panel">
 <div class="signup-panel-button">
     <a class="signup-button sign-up" href="{{route('login')}}">Login</a>
     <a class="signup-button sign-up" href="{{route('register')}}">Register</a>
 </div>


 <form class="form-field" method="POST" action="{{route('register')}}">
    @csrf


     <div class="signup-form-body">
        <label for="name">Name
        <input type="text"
        class="name-input input @error('name') is-invalid @enderror"
        id="name"
        name="name"
        value="{{ old('name') }}" required autocomplete="name" autofocus
        >

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                    </span>
        @enderror

        </label>
        <label for="phone_number">Phone Number
        <input type="number"
        class="number-input input"
        id="number"
        name="phone" required autocomplete="phone"
        >

        </label>
        <label for="email">E-Mail
        <input type="email"
        class="email-input input @error('email') is-invalid @enderror"
        id="email"
        name="email"
        value="{{ old('email') }}" required autocomplete="email"
        >

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                    </span>
        @enderror


        </label>
        <label for="country">Country
        <input type="text"
        class="country-input input @error('country') is-invalid @enderror"
        id="country"
        name="country" required autocomplete="country"
        >
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
     <a href="{{route('login')}}">Login</a>
     <button type="submit"> <a href="{{route('register')}}" class="signup-footer-button">Register</a> </button>
     </div>
     <!-- <a class="create-text-action" href="#"> Create An Account </a> -->
 </form>
</section>
</div>

@endsection
