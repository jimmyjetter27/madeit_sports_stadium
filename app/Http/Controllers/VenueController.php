<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $venues = Venue::query()->get();
        return view('venues', ['venues' => $venues]);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'description' => 'nullable'
        ]);
        $new_venue = Venue::query()->create([
            'name' => $request->name,
            'location' => $request->location,
            'description' => $request->description
        ]);
        if ($new_venue)
        {
            return redirect()->back()->with('success_message', $request->name. ' has been successfully added');
        } else {
            return redirect()->back()->with('error_message', 'An error occurred');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Venue $venue
     * @return \Illuminate\Http\Response
     */
    public function show(Venue $venue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Venue $venue
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $venue = Venue::query()->find($id);
        return view('admin.venues.update_venue', ['venue' => $venue]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Venue $venue
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'description' => 'nullable'
        ]);
        $game = Venue::query()->find($id);
        $game->update(['name' => $request->name, 'location' => $request->location, 'description' => $request->description]);
        return redirect()->back()->with('success_message', $request->name . ' has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Venue $venue
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $venue = Venue::query()->find($id);
        $venue->delete();
        return redirect()->back()->with('success_message', $venue->name . ' has been deleted');
    }
}
