@extends("layouts.spacedcustomlayout")


@section('body')


<div class="header-text head-text">
    <div class="heading-text">
      <p>the market</p>
    </div>
    <div class="float">
      <img src="user/assets/images/rocket.png" class="floating" alt="" style="z-index: 10;position:relative;"/>
    </div>
  </div>
</div>


<div class="child-contain">
<div class="child-element">
  <iframe src="https://ng.widgets.investing.com/top-cryptocurrencies?theme=darkTheme" width="100%" height="100%" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe>

</div>
<div class="child-info" style="text-align: center;color:white; font-size:20px;padding: 10px;">Live Updates</div>
</div>
</header>

<div class="market-update"></div>

<script src="https://crypto.com/price/static/widget/index.js"></script>

<script
type="text/javascript"
src="https://widget.coinlore.com/widgets/new-widget.js"
></script>
<div
class="coinlore-coin-widget"
data-mcap="1"
data-mcurrency="usd"
data-d7="1"
data-cwidth="100%"
data-rank="1"
data-vol="1"
data-id="matic-network"
data-bcolor="#fff"
data-tcolor="#333"
data-ccolor="#333"
data-pcolor="#333"
></div>

@endsection