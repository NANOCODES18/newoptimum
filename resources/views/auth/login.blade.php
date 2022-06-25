@extends("layouts.customlayout")
@section('body')



<section class="before-panel">
    <p><a href="{{route('login')}}" class="signin-breadcrumb">Login</a></p>
    <img src="user/assets/images/earth.png" alt="" class="spin-city">
  </section>
  <section class="signin-panel">
  <div class="signin-panel-button">
     <a class="signin-button sign-in" href="{{route('login')}}">Login</a>
     <a class="signup-button sign-in" href="{{route('register')}}">Register</a>
  </div>

  <form class="form-field" method="POST" action="{{route('login')}}">
    @csrf
     <div class="signin-form-body">
        <label for="email">
          <span class="fa fa-envelope icon"></span>
            
    <input id="email" type="email" placeholder="Email" class="form-control email-input input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    <br>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
   
        </label>
        <label for="password">
          <span class="fa fa-lock icon"></span>
        
        <input id="password" type="password" placeholder="Password" class="form-control password-input input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
 <br>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </label>
     </div>
     <div class="signin-form-footer">
     <p><a href="{{route('password.request')}}">Forgot Password &quest;</a> </p>
     <button class="signin-footer-button">Login</button>
    
     </div>
     <a class="create-text-action" href="{{route('register')}}"> Register </a>
  </form>
  </section>
  </div>
  <div class="on-it"></div>

@endsection
