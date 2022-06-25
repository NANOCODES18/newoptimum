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

  <form class="form-field" method="POST" action="">
     <div class="signin-form-body">
        <label for="email">
          <span class="fa fa-envelope icon"></span>
        <input type="email" 
        class="email-input input"
        placeholder="Email"
        >
        </label>
        <label for="password">
          <span class="fa fa-lock icon"></span>
        <input type="email" 
        class="password-input input"
        placeholder="Password"
        >
        </label>
     </div>
     <div class="signin-form-footer">
     <p>Forgot Password &quest;</p>
     <a href="" class="signin-footer-button">Login</a>
     </div>
     <a class="create-text-action" href=""> Register </a>
  </form>
  </section>
  </div>
  <div class="on-it"></div>

@endsection
