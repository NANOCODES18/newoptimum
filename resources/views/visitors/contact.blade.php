@extends("layouts.spacedcustomlayout")

@section("body")


<div class="header-text">reach us</div>

<div class="card-father">
  <div class="login-card login-info">
    <div class="box-model">
      <div class="icon">
        <i class="fa fa-map-marker" aria-hidden="true"></i>
      </div>
      <div class="call-icon">
        <p><i class="fa fa-whatsapp" aria-hidden="true"></i>{{$compd? $compd->companyphone:"coming soon"}}</p>
        <p><i class="fa fa-envelope" aria-hidden="true"></i>{{$compd? $compd->companyemail:"coming soon"}}</p>
        <p><i class="fa fa-map-marker" aria-hidden="true"></i>{{$compd? $compd->companylocation:"coming soon"}}</p>
      </div>
    </div>

    <div class="box-model">
      <div class="icon">
        <img src="user/assets/images/Customer care 2.svg" alt="" />
      </div>
      <div class="call-icon ico border">
        <form action="{{route('postcontact')}}" method="POST">
          @csrf
          <input type="text" placeholder="Name"  name="name"/><br />
          <input type="email" placeholder="E-mail" name="email" /><br />
          <textarea name="email"
            cols="20"
            rows="5"
            placeholder="how can we help"
            ?
          ></textarea
          ><br/>
          <button type="submit">Chat</button>
        </form>
      </div>
    </div>
    <div class="box-model">
      <div class="icon">
        <i class="fa fa-envelope-square" aria-hidden="true"></i>
      </div>
      <div class="call-icon ico">
        <form action="{{route('postcontact')}}" method="post">
          @csrf
          <input type="text" placeholder="Name" name="name" /><br />
          <input type="email" placeholder="E-mail" name="email" /><br/>
          <textarea name="message"
            cols="20"
            rows="5"
            placeholder="how can we help"
            ?
          ></textarea
          ><br />
          <button type="submit">E-mail</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</header>
<div class="contact-login"></div>
<div class="middle-text">
<p>
  Our team is here for you! The resources below will answer most common questions, but if you can't find the solution you're looking for, we have live agents.
  Be cautious if you receive unsolicited requests to access your computer. Only join support sessions with people you recognize and trust. Report abuse and any suspicious activity you notice immediately

</p>
</div>


@endsection()
