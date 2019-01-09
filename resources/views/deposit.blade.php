@extends('layouts.app')
<style>
.inp_box{
  margin:20px 0px;
}
</style>
@section('content')
<div id="content" class="ui-content ui-content-aside-overlay">
    <div class="ui-content-body">
        <div class="ui-container">
          <div id="payment-result" class="admin_body" style="display:none">

          </div>
          <div class="admin_body" style="">
                <div class="deposit_top">
                  <div class="row">
                      <div class="col-md-5 col-sm-5">
                          <div class="ico_platform">
                              <h4>Pre - ICO ends in </h4>
                                <div id="clockdiv" class="clock_counter_admin">
                                    <ul>
                                        <li><span class="days"></span><small>:</small></li>
                                        <li><span class="hours"></span><small>:</small></li>
                                        <li><span class="minutes"></span><small>:</small></li>
                                        <li><span class="seconds"></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7">
                          <div class="coin_balance">
                              <img src="/images/coin_logo.png" class="img-responsive" alt="coin_balance_img" style="width:206px"/>
                                <h4>Your Current Coin Balance
                                <span>151.10000008 ACNA</span></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab_section">
                    <div class="row">
                        <div id="buy_section" class="col-sm-12">
                            <div class="tab_box">
                                <ul>
                                    <li class="active"> <a data-toggle="tab" href="#menu1" class="btc_box">Bitcoin</a></li>
                                    <li><a data-toggle="tab" href="#menu2" class="eth_box">Litecoin</a></li>
                                    <li><a data-toggle="tab" href="#menu3" class="ltc_box">Ethereum</a></li>
                                    <li><a data-toggle="tab" href="#menu4" class="glc_box">Dashcoin</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div id="menu1" class="tab-pane fade in active">
                                    <div class="tab_inner">
                                      <div class="row">
                                          <div class="col-sm-6">
                                              <div class="deposit_withdraw_box">
                                                  <h4>Buy Arcana Coin</h4>
                                                    <p style="font-weight:bold">Enter ACNA Amount</p>
                                                    <span><input id="acna_amount_btc" type="text" autocomplete="off"
                                                    placeholder="0.0000" /></span>
                                                    <p style="font-weight:bold">Enter BTC Amount</p>
                                                    <span><input id="amount_btc" type="text" autocomplete="off"
                                                    placeholder="0.0000" /></span>
                                                    <a class="buybtn btn btn-primary" href="#" data-coin="btc">Buy Coin</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="deposit_withdraw_box">
                                                  <h5><img src="images/deposit_withdraw_icon.png" alt="icon" class="img-responsive" />
                                                    Statements</h5>
                                                  <p style="font-weight:bold;padding-top:10px">Phase = Pre - ICO</p>
                                                  <p style="font-weight:bold;">Phase Total Supply = 500000000000</p>
                                                  <p style="font-weight:bold;">Phase Saled Amount = 120030 (7%)</p>
                                                  <p style="font-weight:bold;color:#e8a400">Phase Price 1 ACNA = <span id="acna_btc">0.0008328</span> BTC</p>
                                                  <p style="font-weight:bold;">Maximum Purchase Amount = 11997678 ACNA</p>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                  <div class="tab_inner">
                                      <div class="row">
                                          <div class="col-sm-6">
                                            <div class="deposit_withdraw_box">
                                                <h4>Buy Arcana Coin</h4>
                                                  <p style="font-weight:bold">Enter ACNA Amount</p>
                                                  <span><input id="acna_amount_ltc" type="text" autocomplete="off"
                                                  placeholder="0.0000" /></span>
                                                  <p style="font-weight:bold">Enter LTC Amount</p>
                                                  <span><input id="amount_ltc" type="text" autocomplete="off"
                                                  placeholder="0.0000" /></span>
                                                  <a class="buybtn btn btn-primary" href="#" data-coin="ltc">Buy Coin</a>
                                              </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="deposit_withdraw_box">
                                                <h5><img src="images/deposit_withdraw_icon.png" alt="icon" class="img-responsive" />
                                                  Statements</h5>
                                                <p style="padding-top:10px">Phase = Pre - ICO</p>
                                                <p>Phase Total Supply = 500000000000</p>
                                                <p>Phase Saled Amount = 120030 (7%)</p>
                                                <p style="color:#e8a400">Phase Price 1 ACNA = <span id="acna_ltc">0.0008328</span> LTC</p>
                                                <p>Maximum Purchase Amount = 11997678 ACNA</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                  <div class="tab_inner">
                                      <div class="row">
                                          <div class="col-sm-6">
                                            <div class="deposit_withdraw_box">
                                                <h4>Buy Arcana Coin</h4>
                                                  <p style="font-weight:bold">Enter ACNA Amount</p>
                                                  <span><input id="acna_amount_eth" type="text" autocomplete="off"
                                                  placeholder="0.0000" /></span>
                                                  <p style="font-weight:bold">Enter ETH Amount</p>
                                                  <span><input id="amount_eth" type="text" autocomplete="off"
                                                  placeholder="0.0000" /></span>
                                                  <a class="buybtn btn btn-primary" href="#" data-coin="eth">Buy Coin</a>
                                              </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="deposit_withdraw_box">
                                                <h5><img src="images/deposit_withdraw_icon.png" alt="icon" class="img-responsive" />
                                                  Statements</h5>
                                                <p style="padding-top:10px">Phase = Pre - ICO</p>
                                                <p>Phase Total Supply = 500000000000</p>
                                                <p>Phase Saled Amount = 120030 (7%)</p>
                                                <p style="color:#e8a400">Phase Price 1 ACNA = <span id="acna_eth">0.0008328</span> ETH</p>
                                                <p>Maximum Purchase Amount = 11997678 ACNA</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu4" class="tab-pane fade">
                                  <div class="tab_inner">
                                      <div class="row">
                                          <div class="col-sm-6">
                                                <div class="deposit_withdraw_box">
                                                    <h4>Buy Arcana Coin</h4>
                                                      <p style="font-weight:bold">Enter ACNA Amount</p>
                                                      <span><input id="acna_amount_dash" type="text" autocomplete="off"
                                                      placeholder="0.0000" /></span>
                                                      <p style="font-weight:bold">Enter DASH Amount</p>
                                                      <span><input id="amount_dash" type="text" autocomplete="off"
                                                      placeholder="0.0000" /></span>
                                                      <a class="buybtn btn btn-primary" href="#" data-coin="dash">Buy Coin</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="deposit_withdraw_box">
                                                <h5><img src="images/deposit_withdraw_icon.png" alt="icon" class="img-responsive" />
                                                  Statements</h5>
                                                <p style="padding-top:10px">Phase = Pre - ICO</p>
                                                <p>Phase Total Supply = 500000000000</p>
                                                <p>Phase Saled Amount = 120030 (7%)</p>
                                                <p style="color:#e8a400">Phase Price 1 ACNA = <span id="acna_dash">0.0008328</span> DASH</p>
                                                <p>Maximum Purchase Amount = 11997678 ACNA</p>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    var price_btc = 0;
    var price_eth = 0;
    var price_ltc = 0;
    var price_dash = 0;
    var price_acna = 0.1;
    $(document).ready(function(){
      $.getJSON('https://api.coinmarketcap.com/v1/ticker/bitcoin/?convert=USD', function(data){
        price_btc = data[0]['price_usd'];
        value = price_acna / price_btc;
        $('#acna_btc').html(value);
        console.log(data[0]['price_usd']);
      });
      $.getJSON('https://api.coinmarketcap.com/v1/ticker/ethereum/?convert=USD', function(data){
        price_eth = data[0]['price_usd'];
        value = price_acna / price_eth;
        $('#acna_eth').html(value);
        console.log(data[0]['price_usd']);
      });
      $.getJSON('https://api.coinmarketcap.com/v1/ticker/litecoin/?convert=USD', function(data){
        price_ltc = data[0]['price_usd'];
        value = price_acna / price_ltc;
        $('#acna_ltc').html(value);
        console.log(data[0]['price_usd']);
      });
      $.getJSON('https://api.coinmarketcap.com/v1/ticker/dash/?convert=USD', function(data){
        price_dash = data[0]['price_usd'];
        value = price_acna / price_dash;
        $('#acna_dash').html(value);
        console.log(data[0]['price_usd']);
      });
    });

    document.getElementById("amount_eth").addEventListener("input", function(){
      value = $('#amount_eth').val();
      acna_value = value * price_eth / price_acna;
      $('#acna_amount_eth').val(acna_value);
      console.log('btc', value);
    });
    document.getElementById("amount_ltc").addEventListener("input", function(){
      value = $('#amount_ltc').val();
      acna_value = value * price_ltc / price_acna;
      $('#acna_amount_ltc').val(acna_value);
      console.log('ltc', value);
    });
    document.getElementById("amount_dash").addEventListener("input", function(){
      value = $('#amount_dash').val();
      acna_value = value * price_dash / price_acna;
      $('#acna_amount_dash').val(acna_value);
      console.log('dash', value);
    });
    document.getElementById("amount_btc").addEventListener("input", function(){
      value = $('#amount_btc').val();
      acna_value = value * price_btc / price_acna;
      $('#acna_amount_btc').val(acna_value);
      console.log('btc', value);
    });

    document.getElementById("acna_amount_eth").addEventListener("input", function(){
      value = $('#acna_amount_eth').val();
      eth_value = value * price_acna / price_eth;
      $('#amount_eth').val(eth_value);
      console.log('btc', value);
    });

    document.getElementById("acna_amount_ltc").addEventListener("input", function(){
      value = $('#acna_amount_ltc').val();
      ltc_value = value * price_acna / price_ltc;
      $('#amount_ltc').val(ltc_value);
      console.log('ltc', value);
    });
    document.getElementById("acna_amount_dash").addEventListener("input", function(){
      value = $('#acna_amount_dash').val();
      dash_value = value * price_acna / price_dash;
      $('#amount_dash').val(dash_value);
      console.log('dash', value);
    });
    document.getElementById("acna_amount_btc").addEventListener("input", function(){
      value = $('#acna_amount_btc').val();
      acna_value = value * price_acna / price_btc;
      $('#amount_btc').val(acna_value);
      console.log('btc', value);
    });


    $('.buybtn').click(function(){
      coin = $(this).data('coin');
      if (coin == 'eth'){
        amount = $('#amount_eth').val();
        amount_acna = $('#acna_amount_eth').val();
      } else if (coin == 'btc'){
        amount = $('#amount_btc').val();
        amount_acna = $('#acna_amount_btc').val();
      } else if (coin == 'dash'){
        amount = $('#amount_dash').val();
        amount_acna = $('#acna_amount_dash').val();
      } else if (coin == 'ltc'){
        amount = $('#amount_ltc').val();
        amount_acna = $('#acna_amount_ltc').val();
      }

      $.ajax({
        url:'/buycoin',
        data: {'coin':coin, 'amount':amount, 'amount_acna':amount_acna},
        type: 'POST',
        async: true,
        success: function (ret) {
          console.log(ret);
          $('#payment-result').html(ret['data']);
          $('.admin_body').hide();
          $('#payment-result').show();
        },
        error: function (ret){
          console.log(ret);
        }
      });
    });
    </script>
    @endsection
