<?php

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('json_response')->group(function () {
Route::get('exchange', function (Request $request) {
//    $request->validate([
//        'number' => 'required',
//        'amount' => 'required',
//        'network' => 'required',
//    ]);
    return \App\Momo::momoPay(
        '0548984119',
        0.5,
        \App\Momo::generate_id(),
        'MTN',
        url('api/callback')
    );
});


Route::get('collection_callback', function (Request $request) {
    try {
        \Illuminate\Support\Facades\Log::info('callback_response: '.json_encode($request->all()));
        $record_id = $request->transaction_id;
        $status = $request->status;

        $payment = Payment::query()->where('transaction_id', $record_id)->first();
        if ($payment->status == 'pending' || $payment->status == 'failed') {
            $payment->status = strtolower($status);
            $payment->save();
        }
    } catch (\Exception $exception) {
        Log::info('CALLBACK COLLECTION RESPONSE:' . $record_id.'. Exception: '.$exception->getMessage());
    }
});

});
