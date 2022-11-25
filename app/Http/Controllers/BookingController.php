<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessTransaction;
use App\Models\Booking;
use App\Models\Game;
use App\Models\Payment;
use App\Momo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookingRequest  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }


    public function book(Request $request)
    {
        $request->validate([
            'phone_number' => 'required|regex:/^0[0-9]{9}$/',
            'network' => 'required|in:MTN,AIR,VOD,GLO',
            'start_date' => 'required|date',
            'end_date' => 'required|date'
        ]);
        $game = Game::query()->find($request->game_id);
//        dd($request->all());
        $transaction_id = Momo::generate_id();
        $new_payment = Payment::query()->create([
            'total_amount' => $game->amount,
            'transaction_id' => $transaction_id,
            'phone_number' => $request->phone_number,
            'network' => $request->network
        ]);

        $new_booking = Booking::query()->create([
            'user_id' => auth()->user()->id,
            'game_id' => $request->game_id,
            'venue_id' => $request->venue,
            'payment_id' => $new_payment->id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);
        ProcessTransaction::dispatch(
            $request->phone_number,
            $request->network,
            $game->amount,
            $transaction_id
        );
        return redirect()->back()->with('success_message', 'Thank you for booking. You will receive a prompt soon!');
    }
}
