<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NotificationController extends Controller
{
    public function notify(Request $request)
    {
        //public function notify(Request $request)
    //{
        // $requestData = json_decode($request);



        // $merchCode = $requestData->Request['merch_code'];
        // $appId = $requestData->Request['appid'];
        // $trade_status = $requestData->Request['trade_status'];
        // $total_amount = $requestData->Request['total_amount'];

        // $exists = DB::table('ordered_products')->where('merchant_id', $merchCode)->first();

        // if ($exists) {
		// 	return "success";
        // } else {
        //     return response()->json("failed");
        // }

        if(DB::table('ordered_products')->where('merchant_order_id', $request->merch_order_id)->exists()) {
            return "success";
        } else {
            return "fail";
        }

     //}
    }
}
