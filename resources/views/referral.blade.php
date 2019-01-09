@extends('layouts.app')

@section('content')
<div id="content" class="ui-content ui-content-aside-overlay">
  <div class="ui-content-body">
    <div class="ui-container">
      <div class="admin_body" >
        <div class="container">
          <div class="row">
            <div class="col-lg-9">
              <div class="tab_content_box clearfix">
                <div class="profilesub">
                  <h2>My<span>Referral</span></h2>
                </div>
                <div class="col-lg-12" style="padding-top:10px">
                  <p class="refrlpara"></p>
                  <p style="color:#000">You can earn bonus tokens by referring another to invest in Arcana. For your effort, we will offer you 5% of their investment as bonus coins.</p>
                  <p></p>
                </div>
              </div>
              <div class="section_padding_50">
                <div class="tab_content_box clearfix ">
                  <div class="profilesub">
                    <h2>Your Personal <span>Referral Link</span></h2>
                  </div>
                  <div class="col-lg-12" style="padding-top:10px">
                    <div class="nren">
                      <div class="col-lg-10" style="padding:0px">
                        <input id="link01" type="text" value="https://arcanacoins.com/referral/skyclean" name="text">
                      </div>
                      <div class="col-lg-2" style="padding:0px">
                        <button data-copytarget="#link01" class="copy">Copy</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-lg-3">
              <div class="widget widget_download_link" style="margin:0">
                <div class="widget_download_link_content">
                  <h2 class="section_hedings_white"> <span>My Referrals</span></h2>
                  <ul>
                    <li>
                      <a style="cursor:default;" href="#"><i class="icon-gift "></i> Referral <span>16</span></a>
                    </li>
                    <li>
                      <a style="cursor:default;" href="#"><i class="icon-layers "></i> Inactive <span>0</span></a>
                    </li>
                    <li>
                      <a style="cursor:default;" href="#"><i class="icon-layers "></i> Total No Of Active <span>16</span></a>
                    </li>
                    <li>
                      <a style="cursor:default;" href="#"><i class="icon-layers "></i> Total Bouns<span>0.00 ACNA</span></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
                  <div class="row">
                      <div class="col-sm-12">
                          <div class="table_title">
                              <h5>Referrals</h5>
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
                                              <th style="text-align:center">REFERRAL ID</th>
                                              <th>NAME</th>
                                              <th>EMAIL</th>
                                              <th>JOINED </th>
                                              <th>STATUS </th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>1</td>
                                              <td>Erthwrg gergerg</td>
                                              <td>gejix@2ether.net</td>
                                              <td>2018-04-17 08:04:22</td>
                                              <td>Active</td>
                                          </tr>
                                          <tr>
                                              <td>2</td>
                                              <td>Mao pao</td>
                                              <td>gopal@ot-l.com</td>
                                              <td>2018-04-17 08:04:22</td>
                                              <td>Active</td>
                                          </tr>
                                          <tr>
                                              <td>3</td>
                                              <td>FDFS FSDFAS</td>
                                              <td>359797875@qq.com</td>
                                              <td>2018-04-17 08:04:22</td>
                                              <td>Active</td>
                                          </tr>
                                          <tr>
                                              <td>4</td>
                                              <td>Pirasath indrakumar</td>
                                              <td>pirasath@ot-l.com</td>
                                              <td>2018-04-17 08:04:22</td>
                                              <td>Active</td>
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
  <script src="/js/jquery-1.12.2.min.js"></script>
  <script type="text/javascript" src="/js/datatables.min.js"></script>
  <script type="text/javascript">
      $(function() {

          'use strict';


      document.body.addEventListener('click', copy, true);


      function copy(e) {
        var
          t = e.target,
          c = t.dataset.copytarget,
          inp = (c ? document.querySelector(c) : null);

        if (inp && inp.select) {
          inp.select();
          try {
            document.execCommand('copy');
            inp.blur();
          }
          catch (err) {
             swal({
                title: "Please press Ctrl/Cmd + C to copy",
                confirmButtonColor: "#f5ab35"
            });
          }
        }
      }

      });
  </script>
  @endsection
