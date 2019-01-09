<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\CoinPayments\CoinPaymentsAPI;
use Log;

class ApiController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {

  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */
  public function test()
  {
    $image  = $_POST['image'];
    Log::info('-----------------');
    Log::info($image);
    echo json_encode($image); die;
  }
}
