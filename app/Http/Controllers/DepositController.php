<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CoinPayments\CoinPaymentsAPI;

class DepositController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */
  public function deposit()
  {
    return view('deposit', [
      'page_name' => 'Deposit'
    ]);
  }

  public function buycoin(Request $request){
    $user = auth()->user();
    $cps = new CoinPaymentsAPI();
    $cps->Setup('88c80c25993E27bB13175d92b6f29554d6ae82e43D5846dc2A4af285221479E8','5de34157918a2cb3e22a4aa08b35afbaeebc0faa6b5176f00d3ce2a925952e9a');
    $amount = $request->input('amount');
    $sel_coin = $request->input('coin');
    $ac_currency = "USD";
    $result = $cps->CreateTransactionSimple($user->name,$user->email,$amount,$ac_currency,$sel_coin);
    if ($result['error'] == 'ok') {
      $eamount=$result['result']['amount'];
      //$ecashamount=$points * $eamount ;
      // $data = array(
      //   'transaction_id'=>$result['result']['txn_id'],
      //   'member_id' => $user_id,
      //   'cash_type'  =>$sel_coin,
      //   'deposit_amount' =>$amount,
      //   'btcamount'=>$eamount,
      //   'ecashcoin' => 0,
      //   'created_on' => $datecreated,
      //   'payment_status'=>'1',
      //   'type'  => '1',
      // );
      // $this->db->insert('transaction_history', $data);
      $le = php_sapi_name() == 'cli' ? "\n" : '<br />';
      $trans_id=$result['result']['txn_id'];
      $address=$result['result']['address'];
      $amount=$result['result']['amount'];
      $qrcode=$result['result']['qrcode_url'];
      $url=$result['result']['status_url'];
      $output =' <div class="col-md-12 col-sm-12 qr_blk">
      <h2 style="color:#fff">Payment</h2>
      <div class="qr_img">
      <img src="'.$qrcode.'" alt="qr code"><a href="http://www.qrcode-generator.de" border="0" style="cursor:default" rel="nofollow"></a>
      </div>
      <div class="qr_cont">
      <div class="inp_box">
      <label>'.$sel_coin.' Amount</label>
      <input type="text" name="btcamt" value="'.$amount.'" class="btcamt" disabled>
      </div>
      <div class="inp_box">
      <label>Address</label>
      <input type="text" name="address" value="'.$address.'" class="name" disabled>
      </div>
      <div class="inp_box">
      <label>Transaction ID</label>
      <input type="text" name="id" class="id" value="'.$trans_id.'" disabled>
      </div>
      <div class="inp_box">
      <label>Transaction ID</label>
      <button class="btn btn-primary">Confirm</button>
      </div>
      </div>
      </div>
      ';

      $output = '<div class="row" style="width:70%;margin:50px auto;background:rgba(14, 28, 42, 0.8)">
                    <div class="col-md-12 col-sm-12" style="margin-top:30px;">
                    <div class="inp_box" style="text-align:center">
                      <h2 style="color:#fff;">Payment successfully created</h2>
                    </div>
                    <div class="inp_box" style="text-align:center">
                      <p style="color:#fff;">Please send that amount to this address. You can note transaction ID for checking the transaction.</p>
                    </div>
                    <div class="qr_img" style="text-align:center">
                      <img src="'.$qrcode.'" alt="qr code"><a href="http://www.qrcode-generator.de" border="0" style="cursor:default" rel="nofollow"></a>
                    </div>
                    <div class="qr_cont">
                    <div class="inp_box">
                    <label>'.$sel_coin.' Amount</label>
                    <input type="text" name="btcamt" value="'.$amount.'" class="btcamt" disabled>
                    </div>
                    <div class="inp_box">
                    <label>Address</label>
                    <input type="text" name="address" value="'.$address.'" class="name" disabled>
                    </div>
                    <div class="inp_box">
                    <label>Transaction ID</label>
                    <input type="text" name="id" class="id" value="'.$trans_id.'" disabled>
                    </div>
                    <div class="inp_box">
                    <button class="btn btn-primary">Confirm</button>
                    </div>
                    </div>
                    </div>
                  </div>';
      return array('ret'=>'success', 'data'=>$output, 'page_name' => 'Payment');
    }
    else
    {
      $output['error'] = $result['error'];

      return array(
      'page_name' => 'Payment',
      'ret'=>'failed',
      'data'=>$output['error']
      );
    }
  }
}
