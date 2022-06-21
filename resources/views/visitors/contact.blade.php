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
        <form action="">
          <input type="text" placeholder="Name" /><br />
          <input type="email" placeholder="E-mail" /><br />
          <textarea
            cols="20"
            rows="5"
            placeholder="how can we help"
            ?
          ></textarea
          ><br />
          <button>Chat</button>
        </form>
      </div>
    </div>
    <div class="box-model">
      <div class="icon">
        <i class="fa fa-envelope-square" aria-hidden="true"></i>
      </div>
      <div class="call-icon ico">
        <form action="">
          <input type="text" placeholder="Name" /><br />
          <input type="email" placeholder="E-mail" /><br />
          <textarea
            cols="20"
            rows="5"
            placeholder="how can we help"
            ?
          ></textarea
          ><br />
          <button>E-mail</button>
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
Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem
eligendi ab est autem aperiam at aut esse molestias. Molestiae ipsum
iusto fuga veniam, ea dolorum doloribus! Consequatur esse minus, dolores
nihil aspernatur voluptatem sint voluptas ducimus doloribus illo commodi
facere non tenetur a explicabo odio. Veritatis est ex ullam accusamus.
</p>
</div>


@endsection()
