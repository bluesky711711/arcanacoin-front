@extends('layouts.app')

@section('content')
<div id="content" class="ui-content ui-content-aside-overlay">
    <div class="ui-content-body">
        <div class="ui-container">
          <div class="admin_body">
                <div class="deposit_top">
                  <div class="row">
                      <div class="col-md-5 col-sm-5">
                          <div class="ico_platform">
                              <h4>Pre-ICO start in</h4>
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
                                <h4>Current Coin Balance
                                <span>151.10000008 ICO</span></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab_section">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="tab_box">
                                <ul>
                                    <li class="active"> <a data-toggle="tab" href="#menu1" class="btc_box">Bitcoin</a></li>
                                    <li><a data-toggle="tab" href="#menu2" class="ltc_box">Litecoin</a></li>
                                    <li><a data-toggle="tab" href="#menu3" class="eth_box">Ethereum</a></li>
                                    <li><a data-toggle="tab" href="#menu4" class="glc_box">Dashcoin</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div id="menu1" class="tab-pane fade in active">
                                    <div class="tab_inner">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="table_title">
                                                    <h5>Bitcoin Transaction</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="transaction_table">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="table-responsive">
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th>Payment</th>
                                                                    <th>Date</th>
                                                                    <th>Amount</th>
                                                                    <th>comment </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><img class="img-responsive" src="images/tablepay1.png" />BTC</td>
                                                                    <td>Aug 18, 2017 </td>
                                                                    <td>0.0000000000000 BTC </td>
                                                                    <td>Deposit to 1 year to Daily</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="page_bottom">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <div class="showdetails">
                                                        <h5><span>10</span> show</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xs-8">
                                                    <div class="paginationsec">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                                            <li class="listd">1 of 1</li>
                                                            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                  <div class="tab_inner">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="table_title">
                                                    <h5>Litecoin Transaction</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="transaction_table">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="table-responsive">
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th>Payment</th>
                                                                    <th>Date</th>
                                                                    <th>Amount</th>
                                                                    <th>comment </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                              <tr>
                                                                  <td><img class="img-responsive" src="images/tablepay4.png" />LTC</td>
                                                                  <td>Aug 18, 2017</td>
                                                                  <td>0.0000000000000 LTC</td>
                                                                  <td><span>Purchased</span></td>
                                                              </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="page_bottom">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <div class="showdetails">
                                                        <h5><span>10</span> show</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xs-8">
                                                    <div class="paginationsec">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                                            <li class="listd">1 of 1</li>
                                                            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                  <div class="tab_inner">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="table_title">
                                                    <h5>Ethereum Transaction</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="transaction_table">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="table-responsive">
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th>Payment</th>
                                                                    <th>Date</th>
                                                                    <th>Amount</th>
                                                                    <th>Type </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <tr>
                                                                    <td><img class="img-responsive" src="images/tablepay3.png" />ETH</td>
                                                                    <td> Aug 18, 2017 </td>
                                                                    <td>0.0000000000000 ETH </td>
                                                                    <td><span>Purchased</span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="page_bottom">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <div class="showdetails">
                                                        <h5><span>10</span> show</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xs-8">
                                                    <div class="paginationsec">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                                            <li class="listd">1 of 1</li>
                                                            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu4" class="tab-pane fade">
                                  <div class="tab_inner">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="table_title">
                                                    <h5>Dashcoin Transaction</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="transaction_table">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="table-responsive">
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th>Payment</th>
                                                                    <th>Date</th>
                                                                    <th>Amount</th>
                                                                    <th>Type</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><img class="img-responsive" src="images/tablepay2.png" />DASH</td>
                                                                    <td> Aug 18, 2017 </td>
                                                                    <td>0.0000000000000 DASH </td>
                                                                    <td><span>Purchased</span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="page_bottom">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <div class="showdetails">
                                                        <h5><span>10</span> show</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xs-8">
                                                    <div class="paginationsec">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                                            <li class="listd">1 of 1</li>
                                                            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                                        </ul>
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
    </div>
  </div>
@endsection
