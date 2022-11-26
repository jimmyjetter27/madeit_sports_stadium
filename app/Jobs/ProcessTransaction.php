<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ProcessTransaction implements ShouldQueue
{
    public $phone_number;
    public $network;
    public $amount;
    public $transaction_id;
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 1;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($phone_number, $network, $amount, $transaction_id)
    {
        $this->phone_number = $phone_number;
        $this->network = $network;
        $this->amount = $amount;
        $this->transaction_id = $transaction_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $callback_url = url('api/collection_callback');
        $make_payment = \App\Momo::momoPay(
            $this->phone_number,
            $this->amount,
            $this->transaction_id,
            $this->network,
            $callback_url
        );
        Log::info('Collection Response: '.json_encode($make_payment));
    }
}
