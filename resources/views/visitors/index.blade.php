@extends("layouts.spacedcustomlayout")


@section('body')
    
<div class="header-text head-text">
    <div class="heading-text">
    <p data-aos="fade-right"><span>Optimising</span>  your <br> <span> finance</span> for <br> <span>profits</span></p><button>GET STARTED</button>
  </div>
  <div class="float">
    <img src="user/assets/images/rocket.png" class="floating" alt="">
  </div>
  </div>

<div class="card-father parent">
  <div class="btc-marque" style="background-color: transparent;">
    <iframe src="https://bit2me.com/widget/crypto-carousel/v1" style="display:block;width:100%;height:40px;" frameborder="0"></iframe>
  </div>
</div>

</div>

</header>
<div class="index-empty"></div>
<h3 style="text-align: center;">what we do</h3>

<!-- card section -->
<div class="card-section">

<div class="card" data-aos="fade-up-left">
<img
  src="user/assets/images/investment-model-svgrepo-com 1.svg"
  alt=""
/>
<div class="card-text" >
  <h3>Binary Option</h3>
  <p>
    A binary option is a financial exotic option in which the payoff is either some fixed monetary amount or nothing at all. The two main types of binary options are the cash-or-nothing binary option and the asset-or-nothing binary option. Which you are free to enjoy with us
  </p>
  <button>Read more</button>
</div>
</div>
<div class="card" data-aos="zoom-in">
<img
  src="user/assets/images/increasing-stocks-graphic-of-bars-svgrepo-com 1.svg"
  alt=""
/>
<div class="card-text" >
  <h3>Stocks & ETF</h3>
  <p>
    A stock or share is a financial instrument that represents represents a proportionate claim on a company or corporation, its assets and 
  and earnings...An exchange-traded fund (E.T.F)is a type of investment fund and exchange-traded product, i.e. they are traded on stock exchanges, We offer both services free to the public for them to make profits with us
  </p>
  <button>Read more</button>
</div>
</div>
<div class="card" data-aos="fade-up-right">
<img
  src="user/assets/images/coin-stack-svgrepo-com (1) 1.svg"
  alt=""
/>
<div class="card-text">
  <h3>Crypto Currency</h3>
  <p>
    {{$compd? $compd->companyname:"company name"}} now offers all traders the opportunity to trade a wide range of the top ranked digital coins 24/7*. 
    Today cryptocurrencies have become known to most people, Surprising as it might be, anyone can invest in the crypto market to make a profit  </p>
  <button>Read more</button>
</div>
</div>
</div>
</div>

<div class="trade-option">
<div class="trading">
</div>
</div>
<div class="laptop">
<img src="user/assets/images/4 1.png" alt="">
</div>
<div class="trade-option">
<div class="trading">
<div class="trading-content"data-aos="fade-up-right">
<img src="user/assets/images/Group (1).svg" alt="time">
<div class="text">
<h3>OPEN AN ACCOUNT</h3>
<p>To open an account, simply click on the "Register" button on the main page. The next page is the registration form that you need to fill out. This shouldn’t take more than a few minutes. Once you’ve done that, you’ll receive an email from us, and you’re done.
</p>
</div>
</div>
<div class="trading-content" data-aos="fade-up-right">
<img src="user/assets/images/Group (1).svg" alt="time">
<div class="text">
<h3>LOGIN TO MEMBER'S AREA</h3>
<p>Once you’ve opened an account, the next thing would be to familiarize yourself with how different sections of your account works. To start, go to the login page and enter your registration username and chosen password.
</p>
</div>
</div>
<div class="trading-content" data-aos="fade-up-right">
<img src="user/assets/images/Group (1).svg" alt="time">
<div class="text">
<h3>MAKE YOUR FIRST DEPOSIT & WATCH YOUR CAPITAL GROW</h3>
<p>To start earning, you need to make a deposit. You can do this from the deposit section of your account. The minimum deposit amount is different for different plans, and you are allowed to make as many deposits as you want. After you have made a deposit, select an investment plan and invest in then watch your investment grow.
</p>
</div>
</div>
</div>
<div class="laptop"><img src="user/assets/images/4 1.svg" alt="laptop"></div>
</div>

<div class="why-us">
<h2>why choose us</h2>
<div class="funds">
<div class="wallet-add">
<img src="user/assets/images/download-bitcoin.png" alt="">
<div class="fund-text">
<h3>Download Bitcoin Wallet</h3>
<p>Get it on PC or Mobile to create, send and receive bitcoins.</p>
</div>
</div>
<div class="wallet-add">
<img src="user/assets/images/add-bitcoins.png" alt="">
<div class="fund-text">
<h3>Add Funds & Start Investment</h3>
<p>Add bitcoins you’ve created or exchanged via credit card.</p>
</div>
</div>
<div class="wallet-add">
<img src="user/assets/images/buy-sell-bitcoins.png" alt="">
<div class="fund-text">
<h3>Withdraw Your Profit</h3>
<p>Request for withdrawal and receive it within 1 day.</p>
</div>
</div>
</div>
<div class="why-us-content">
<img src="user/assets/images/secure icon 2.svg" alt="">
<img src="user/assets/images/TIME 2.svg" alt="">
<img src="user/assets/images/24-hours-svgrepo-com 4 (1).svg" alt="">
</div>

</div>
<div class="chose-empty" style=" background: linear-gradient(135deg, #cec9c9, #ececec 100%);"></div>


<div class="about-header">

<div class="about">
<div class="about-img">
<img src="user/assets/images/earth.png" alt="" class="earth" data-aos="fade-up-left" >
<img src="user/assets/images/bitcoin.png" alt="" class="btc"  >

</div>
<div class="about-text">
<h1>{{$compd? $compd->companyname:"company name"}}</h1>
<P>{{$compd? $compd->companyname:"company name"}} Company is a distinctive investment company offering our investors access to high-growth investment opportunities in Bitcoin markets and other services. We implement best practices of trading & mining of Bitcoins through our operations, while offering flexibility in our investment plans. Our company benefits from an extensive network of global clients.</P>
<h3><span>OUR MISSION</span>|OUR ADVANTAGES| OUR GUARANTY</h3>
<P>Our aim is to utilize our expertise & knowledge which will benefit our clients and the users of our services.</P>
<button><a href="user/about.html" style="color: white; text-decoration:none;">READ MORE</a></button>
</div>
</div>


<div class="asset-management">
<div class="asset-text">
<h2>
We set the pace, others follow
</h2>
<p>As high-conviction investors, we refuse to follow the herd. Instead, we focus on stocks that are out of favour with mainstream investors, as we believe that these offer the greatest potential for long-term gains. This is because stocks that are popular tend to be overvalued – while out-of-favour stocks are often too cheap. We aim to exploit this inefficiency for our shareholders.</p>
<button>View More</button>
</div>
<div class="asset-content">
<div class="asset-files">
<i class="fa fa-money" aria-hidden="true"></i>
<h2>Asset Managment</h2>
<p>we are trusted adivisor to our clients , assisting them in developing and accessing alternatives to meet our strategic developments.</p>

<div class="over-lay">
 <div class="text">
  <i class="fa fa-money" aria-hidden="true"></i>
  <h2>Asset Managment</h2>
  <p>we are trusted adivisor to our clients , assisting them in developing and accessing alternatives to meet our strategic developments.</p>
  <svg class="w-6 h-6"
  fill="none" stroke="currentColor" viewBox="0 0 24 24"
  xmlns="user/http://www.w3.org/2000/svg"><path stroke-linecap="round"
  stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
 </svg>
 </div>
</div>
</div>

<div class="asset-files files2">
<i class="fa fa-file-text" aria-hidden="true"></i>
<h2>Wealth Management</h2>
<p>Advising wealthy families sometimes overall generations is a complex task of responsibiliy</p>

<div class="over-lay">
 <div class="text">
  <i class="fa fa-money" aria-hidden="true"></i>
  <h2>Wealth Management</h2>
<p>Advising wealthy families sometimes overall generations is a complex task of responsibiliy</p>

  <svg class="w-6 h-6"
  fill="none" stroke="currentColor" viewBox="0 0 24 24"
  xmlns="user/http://www.w3.org/2000/svg"><path stroke-linecap="round"
  stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
 </svg>
 </div>
</div>
</div>
<div class="asset-files">
<i class="fa fa-database" aria-hidden="true"></i>
<h2>Mutual Funds</h2>
<p>let experts handle the works of making you rich</p>

<div class="over-lay">
 <div class="text">
  <i class="fa fa-money" aria-hidden="true"></i>
  <h2>Mutual Funds</h2>
<p>let experts handle the works of making you rich</p>
  <svg class="w-6 h-6"
  fill="none" stroke="currentColor" viewBox="0 0 24 24"
  xmlns="user/http://www.w3.org/2000/svg"><path stroke-linecap="round"
  stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
 </svg>
 </div>
</div>
</div>
<div class="asset-files files2">
<i class="fa fa-archive" aria-hidden="true"></i>
<h2>Brokerage Account</h2>
<p>your money is safe and sound you get guaranteed results.</p>

<div class="over-lay">
 <div class="text">
  <i class="fa fa-money" aria-hidden="true"></i>
  <h2>Brokerage Account</h2>
  <p>your money is safe and sound you get guaranteed results.</p>
  <svg class="w-6 h-6"
  fill="none" stroke="currentColor" viewBox="0 0 24 24"
  xmlns="user/http://www.w3.org/2000/svg"><path stroke-linecap="round"
  stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
 </svg>
 </div>
</div>
</div>
</div>
</div>
<div class="info-section">
<h2>latest Transactions</h2>
<div class="info-table">
  <table>
    <caption>latest withdrawal</caption>
    <tr>
      <th>ID</th>
      <th>Date</th>
      <th>Amount</th>
    </tr>
    <tr>
      <td style='font-size: 12px;'>1BEK0KRX****</td>
      <td style='font-size: 12px;'>14 Jun 2022 10:21:18 am</td>
      <td class=''>$1,090.00</td>
    </tr>
          <tr>
      <td style='font-size: 12px;'>QHFMQNL1****</td>
      <td style='font-size: 12px;'>13 Jun 2022 12:26:49 pm</td>
      <td class=''>$13,553.00</td>
    </tr>
          <tr>
      <td style='font-size: 12px;'>1WLICE2P****</td>
      <td style='font-size: 12px;'>13 Jun 2022 07:50:04 am</td>
      <td class=''>$3,661.00</td>
    </tr>
          <tr>
      <td style='font-size: 12px;'>Y0JTXNC0****</td>
      <td style='font-size: 12px;'>12 Jun 2022 06:05:56 pm</td>
      <td class=''>$13,061.00</td>
    </tr>
          <tr>
      <td style='font-size: 12px;'>RRCEOK1J****</td>
      <td style='font-size: 12px;'>12 Jun 2022 10:09:58 am</td>
      <td class=''>$2,451.00</td>
    </tr>
          <tr>
      <td style='font-size: 12px;'>VD1SDXL3****</td>
      <td style='font-size: 12px;'>12 Jun 2022 03:54:20 am</td>
      <td class=''>$4,373.00</td>
    </tr>
          <tr>
      <td style='font-size: 12px;'>KOMCSGOG****</td>
      <td style='font-size: 12px;'>12 Jun 2022 01:45:42 am</td>
      <td class=''>$3,106.00</td>
    </tr>
          <tr>
      <td style='font-size: 12px;'>PD1JBM2F****</td>
      <td style='font-size: 12px;'>11 Jun 2022 07:32:47 pm</td>
      <td class=''>$3,318.00</td>
    </tr>
          <tr>
      <td style='font-size: 12px;'>B7OUMO1Y****</td>
      <td style='font-size: 12px;'>11 Jun 2022 02:52:34 pm</td>
      <td class=''>$3,928.00</td>
    </tr>
          <tr>
      <td style='font-size: 12px;'>2P5K71CZ****</td>
      <td style='font-size: 12px;'>10 Jun 2022 05:05:31 pm</td>
      <td class=''>$1,037.00</td>
    </tr>
          <tr>
      <td style='font-size: 12px;'>2HTB01YK****</td>
      <td style='font-size: 12px;'>10 Jun 2022 12:22:07 am</td>
      <td class=''>$3,452.00</td>
    </tr>
  </table>
  <table>
    <caption>latest withdrawal</caption>
    <tr>
      <th>ID</th>
      <th>Date</th>
      <th>Amount</th>
    </tr>

    <tr>
      <td style='font-size: 12px;'>SCVVO5FJ*****</td>
      <td style='font-size: 12px;'>14 Jun 2022 10:21:18 am</td>
      <td class=''>$6,533.00</td>
    </tr>
          <tr>
      <td style='font-size: 12px;'>ZPFRP09Y*****</td>
      <td style='font-size: 12px;'>14 Jun 2022 05:39:20 am</td>
      <td class=''>$2,115.00</td>
    </tr>
          <tr>
      <td style='font-size: 12px;'>X6L1VFQ1*****</td>
      <td style='font-size: 12px;'>13 Jun 2022 06:12:45 pm</td>
      <td class=''>$16,652.00</td>
    </tr>
          <tr>
      <td style='font-size: 12px;'>CDMSAQZ4*****</td>
      <td style='font-size: 12px;'>13 Jun 2022 01:43:43 pm</td>
      <td class=''>$15,743.00</td>
    </tr>
          <tr>
      <td style='font-size: 12px;'>DFVLZ9JD*****</td>
      <td style='font-size: 12px;'>13 Jun 2022 07:36:09 am</td>
      <td class=''>$15,428.00</td>
    </tr>
          <tr>
      <td style='font-size: 12px;'>B2K3N3YF*****</td>
      <td style='font-size: 12px;'>13 Jun 2022 06:25:22 am</td>
      <td class=''>$11,682.00</td>
    </tr>
          <tr>
      <td style='font-size: 12px;'>C6ZUPUSJ*****</td>
      <td style='font-size: 12px;'>13 Jun 2022 05:07:26 am</td>
      <td class=''>$5,856.00</td>
    </tr>
          <tr>
      <td style='font-size: 12px;'>ETSCD1OK*****</td>
      <td style='font-size: 12px;'>12 Jun 2022 09:35:07 am</td>
      <td class=''>$6,944.00</td>
    </tr>
          <tr>
      <td style='font-size: 12px;'>X8WGEYQJ*****</td>
      <td style='font-size: 12px;'>12 Jun 2022 04:39:50 am</td>
      <td class=''>$5,196.00</td>
    </tr>
          <tr>
      <td style='font-size: 12px;'>PVH2KVRO*****</td>
      <td style='font-size: 12px;'>11 Jun 2022 03:23:43 pm</td>
      <td class=''>$5,571.00</td>
    </tr>
          <tr>
      <td style='font-size: 12px;'>EDPS06SB*****</td>
      <td style='font-size: 12px;'>11 Jun 2022 01:02:31 pm</td>
      <td class=''>$6,604.00</td>
    </tr>

  </table>
</div>
</div>


<div class="section section-counter ">
<div class="container">
<div style="width:100%;  margin:auto;overflow-x: scroll" style="text-align: center">
    <h2 style="text-align: center">Recent Transactions</h2>



    <h6 style="text-align: center">Our recent payouts to our users</h6>





    <iframe
        src="https://www.btcwidget.info/widget/liveTx/%235dbcd2/%23ffffff/%235e2ead/%23042f66/%23042f66/800/400/10"
        width="800" height="400" frameBorder="0" scrolling="no"></iframe> </iframe>



</div>
</div>
</div>

<div class="video-section">
<div class="video-frame">
<iframe width="100%"
height="250px" src="https://www.youtube.com/embed/Gc2en3nHxA4"
title="YouTube video player" frameborder="0"
allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
allowfullscreen>
</iframe>
</div>

<div class="video-sec">
<div style="width:380px;">
<crypto-converter-widget
 live
 shadow
 symbol
 fiat="united-states-dollar"
 crypto="bitcoin"
 amount="1"
 border-radius="0.60rem"
 background-color="#383a59"
 decimal-places="2"><a
 href="https://cr.today/"
 rel="noopener">Converter Widget</a></crypto-converter-widget>

<script src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget/dist/latest.min.js" async></script>
</div>
</div>
</div>
<!-- <div class="last-box-section">
<div class="last-empty lEmpty"></div>
<div class="last-empty2"></div>
<div class="last-empty emmy"></div>
</div> -->
<div class="stocky" style="display: flex; justify-content:center; padding:20px;">
<div class="stock-flex">
<div class="buy-crypto" data-aos="fade-up-left">
<h3>Cryptocurrencies Trading</h3>
<p>{{$compd? $compd->companyname:"company name"}} now offers all traders the opportunity to trade a wide range of the top ranked digital coins 24/7*.</p>
<button><a href="user/login and signup/signup.html">Invest in stocks</a></button>
<script defer src="https://www.livecoinwatch.com/static/lcw-widget.js"></script> <div class="livecoinwatch-widget-6" lcw-coin="BTC" lcw-base="USD" lcw-period="d" lcw-color-tx="#000000" lcw-color-bg="#ffffff" lcw-border-w="0" ></div>
<script defer src="https://www.livecoinwatch.com/static/lcw-widget.js"></script> <div class="livecoinwatch-widget-6" lcw-coin="SOL" lcw-base="USD" lcw-period="d" lcw-color-tx="#000000" lcw-color-bg="#ffffff" lcw-border-w="0" ></div>
<script defer src="https://www.livecoinwatch.com/static/lcw-widget.js"></script> <div class="livecoinwatch-widget-6" lcw-coin="ETH" lcw-base="USD" lcw-period="d" lcw-color-tx="#000000" lcw-color-bg="#ffffff" lcw-border-w="0" ></div>
</div>

<div class="buy-crypto" data-aos="zoom-in">
<h3>Fores Trading</h3>
<p>Forex is a portmanteau of foreign currency and exchange. </p>
<button><a href="user/login and signup/signup.html">Invest in stocks</a></button>

<div class="btcwdgt-chart" bw-cash="true" bw-noshadow="true"></div>
</div>
<div class="buy-crypto" data-aos="fade-up-right">
<h3>Stocks & ETFs</h3>
<p>Invest in stocks with 0% commission. Buy in bulk or just a fraction.</p>
<button><a href="{{route('register')}}">Invest in stocks</a></button>
<div class="btcwdgt-chart" bw-cash="true" bw-theme="light"></div>

</div>
</div>

</div>

<div class="trade-invest">
<div class="trade-invest-text">
<h2>
<b>Trade and invest</b> in top stocks and ETFs. Trade currency pairs, Indices and Commodities via CFDs. Investing in the financial markets has never been easier.
</h2>
<button> <a href="user/login and signup/signup.html" >Start Trading</a></button>
<div style="border-left: 1px solid black;margin-top: 40px;padding: 15px;">
<h1 id="demo"></h1>
<h6>TRADES OPENED ON {{$compd? $compd->companyname:"company name"}}</h6>
<script>

let interval = setInterval(function(){
  let now = new Date();
  let show = Math.floor(now/20000);
  function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  }

  val = numberWithCommas(show);

  document.getElementById("demo").innerHTML = val;
},1000)
</script>
</div>
</div>
<div class="trade-view-container">
<style>
.tradingview-widget-container{
display: none;
}
.active6{
display: block;
}
</style>
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container active6" style="margin-bottom: 20px;" id="widget1">
<div class="tradingview-widget-container__widget"></div>
<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
{
"symbol": "NASDAQ:TSLA",
"width": "100%",
"locale": "en",
"colorTheme": "light",
"isTransparent": false
}
</script>
</div>
<!-- TradingView Widget END -->
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container active6" style="margin-bottom: 20px;" id="widget2">
<div class="tradingview-widget-container__widget"></div>
<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
{
"symbol": "NASDAQ:AAPL",
"width": "100%",
"locale": "en",
"colorTheme": "light",
"isTransparent": false
}
</script>
</div>
<!-- TradingView Widget END -->
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container" style="margin-bottom: 20px;" id="widget3">
<div class="tradingview-widget-container__widget"></div>
<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
{
"symbol": "NASDAQ:AMZN",
"width": "100%",
"locale": "en",
"colorTheme": "light",
"isTransparent": false
}
</script>
</div>
<!-- TradingView Widget END -->
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container" style="margin-bottom: 20px;" id="widget4">
<div class="tradingview-widget-container__widget"></div>
<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
{
"symbol": "NASDAQ:MSFT",
"width": "100%",
"locale": "en",
"colorTheme": "light",
"isTransparent": false
}
</script>
</div>
<!-- TradingView Widget END -->
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container" style="margin-bottom: 20px;" id="widget5">
<div class="tradingview-widget-container__widget"></div>
<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
{
"symbol": "NASDAQ:NFLX",
"width": "100%",
"locale": "en",
"colorTheme": "light",
"isTransparent": false
}
</script>
</div>
<!-- TradingView Widget END -->
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container" style="margin-bottom: 20px;" id="widget6">
<div class="tradingview-widget-container__widget"></div>
<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
{
"symbol": "NASDAQ:FB",
"width": "100%",
"locale": "en",
"colorTheme": "light",
"isTransparent": false
}
</script>
</div>
<!-- TradingView Widget END -->


<script>
let cs = 0;
let ts = 6;

function next(){
  document.getElementById("widget" + (cs + 1)).classList.remove("active6");
  document.getElementById("widget" + (cs + 2)).classList.remove("active6");
  cs = (ts + cs + 2) % ts;
  document.getElementById("widget" + (cs + 1)).classList.add("active6");
  document.getElementById("widget" + (cs + 2)).classList.add("active6");
}

setInterval(function(){
  next();
}, 10000);

</script>
</div>

</div>
<div class="last-box-sec">

</div>
<section class="testimonials">
<h2 style="color:#8f087f">TESTIMONIES</h2>
<div class="slider-container swiper mySwiper">
  <div class="swiper-wrapper slider-content">
    <div class="swiper-slide slider-card">
      <div class="card-content">
        <div class="image">
          <img src="user/images/profile1.jpg" alt="">
        </div>
        <div class="rating">
          <span class="name">Willie E. Maynard</span>
          <span class="testimony">Then plan is to not only protect the value of your assets but to increase them. I am glad with having professional traders that manage money in high risk markets manage my portfolio here and the profit have been over whelming. </span>
        </div>
      </div>
    </div>
    <div class="swiper-slide slider-card">
      <div class="card-content">
        <div class="image">
          <img src="user/images/profile2.jpg" alt="">
        </div>
        <div class="rating">
          <span class="name">Francesca Boyle</span>
          <span class="testimony">I wish to thank you for this divine help because after two weeks we are out of debt trading with your strategy and also the amount you made ($135,776) profit totaling $220,338 in equity from the $84,562 we gave to you made us pay our clients </span>
        </div>
      </div>
    </div>
    <div class="swiper-slide slider-card">
      <div class="card-content">
        <div class="image">
          <img src="user/images/profile3.jpg" alt="">
        </div>
        <div class="rating">
          <span class="name">Ryan J. Roseberry</span>
          <span class="testimony">INVEST because only one month the account of $5000 has grown to $16,500 profit and I've made over 50% within one month which has been equally shared, It only takes a few seconds to initiate your withdrawals and have your earnings paid to you. Most importantly all withdrawals are instant.</span>
        </div>
      </div>
    </div>
    <div class="swiper-slide slider-card">
      <div class="card-content">
        <div class="image">
          <img src="user/images/profile4.jpg" alt="">
        </div>
        <div class="rating">
          <span class="name">Hamish Wienholt</span>
          <span class="testimony">Your portfolio management is well planned and structured which made me know that its not a PONSI scheme. After starting investment with you people I now see reasons to know that there are people making it BIG in TRADING .</span>
        </div>
      </div>
    </div>
    <div class="swiper-slide slider-card">
      <div class="card-content">
        <div class="image">
          <img src="user/images/profile7.jpg" alt="">
        </div>
        <div class="rating">
          <span class="name">Michelle M. Coleman</span>
          <span class="testimony">Wow this is wonderfully, it works like magic. More grace to your elbow {{$compd? $compd->companyname:"company name"}} Platform. You guys are just sweet, thanks so so much for good and excellent service delivery</span>
        </div>
      </div>
    </div>
    
    <div class="swiper-slide slider-card">
      <div class="card-content">
        <div class="image">
          <img src="user/images/profile6.jpg" alt="">
        </div>
        <div class="rating">
          <span class="name">Mark K. Cool</span>
          <span class="testimony">I have been into many trading close to 4years now. Many strategy I have tried but all failed. I got frustrated and was almost calling it quit. Little did I know that a {{$compd? $compd->companyname:"company name"}} existed....Thanks i stumbled on there facebook advert</span>
        </div>
      </div>
    </div>
    <div class="swiper-slide slider-card">
      <div class="card-content">
        <div class="image">
          <img src="user/images/profile5.jpg" alt="">
        </div>
        <div class="rating">
          <br>
          <span class="name">Brian S. Delgado</span>
          <span class="testimony">Good company to deal with , excellent customer service, fast payment. It takes a lot to trust an investment firm in this climate but i am very happy with there services so far.</span>
        </div>
      </div>
    </div>
    
    <div class="swiper-slide slider-card">
      <div class="card-content">
        <div class="image">
          <img src="user/images/profile8.jpg" alt="">
        </div>
        <div class="rating">
         
          <span class="name">Suzanne W. Nguyen</span>
          <span class="testimony">Since investing with  {{$compd? $compd->companyname:"company name"}}, we have seen gains in our portfolio in a short space of time which is a reassuring indicator. Lastly I just to say many thanks for a very positive meeting yesterday. </span>
        </div>
      </div>
    </div>
    <div class="swiper-slide slider-card">
      <div class="card-content">
        <div class="image">
          <img src="user/images/profile9.jpg" alt="">
        </div>
        <div class="rating">
         
          <span class="name">Cheryl S. Hammack</span>
          <span class="testimony"> This approaches fully integrates life plans and the financial plans and makes very good sense. {{$compd? $compd->companyname:"company name"}} investment is very client centred and professional and we would happily recommend their services to others.</span>
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-pagination"></div>
  </div>

</section>
<figure>
<h1>PACKAGES</h1>
<div class="pricing-container">
<div class="card-pricing">
<div class="card-title">
    <h2>Starter</h2>
    <p><i class="fa fa-dollar"></i><Span>1000</Span> -Minimum</p>
</div>
<div class="card-content">
    <ul>
        <li><i class="fa fa-dollar"></i><Span>10000</Span> -maximum</li>
        <li><i class="fa fa-check-circle"></i>Weekly Return</li>
        <li><i class="fa fa-check-circle"></i> For 4 times</li>
        <li><i class="fa fa-check-circle"></i>100% ROI Each time</li>
        <li></i><i class="fa fa-dollar"></i>55,000 Total Return</li>
        <li><i class="fa fa-check-circle"></i>24/7 Support</li>
    </ul>
    <button><a href="">Sign-up</a></button>
</div>
</div>
<div class="card-pricing">
<div class="card-title">
<h2>Silver</h2>
<p><i class="fa fa-dollar"></i><Span>3000</Span> -Minimum</p>
</div>
<div class="card-content">
<ul>
    <li><i class="fa fa-dollar"></i><Span>30000</Span> -maximum</li>
    <li><i class="fa fa-check-circle"></i>Weekly Return</li>
    <li><i class="fa fa-check-circle"></i> For 4 times</li>
    <li><i class="fa fa-check-circle"></i>100% ROI Each time</li>
    <li></i><i class="fa fa-dollar"></i>55,000 Total Return</li>
    <li><i class="fa fa-check-circle"></i>24/7 Support</li>
</ul>
<button><a href="">Sign-up</a></button>
</div>
</div>
<div class="card-pricing">
<div class="card-title">
  <div class="card-title">
    <h2>Gold</h2>
    <p><i class="fa fa-dollar"></i><Span>40000</Span> -Minimum</p>
</div>
<div class="card-content">
    <ul>
        <li><i class="fa fa-dollar"></i><Span>400000</Span> -maximum</li>
        <li><i class="fa fa-check-circle"></i>Weekly Return</li>
        <li><i class="fa fa-check-circle"></i> For 4 times</li>
        <li><i class="fa fa-check-circle"></i>100% ROI Each time</li>
        <li></i><i class="fa fa-dollar"></i>55,000 Total Return</li>
        <li><i class="fa fa-check-circle"></i>24/7 Support</li>
    </ul>
    <button><a href="">Sign-up</a></button>
</div>
</div>
</div>
</div>
</figure>

    @endsection
