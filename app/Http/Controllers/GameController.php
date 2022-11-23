<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GameController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'sport_image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);
        $new_game = Game::query()->create([
            'name' => $request->name,
            'sport_image' => $request->name.'.'.$request->sport_image->getClientOriginalExtension()
        ]);
        if ($new_game)
        {
            $imageName = $request->name.'.'.$request->sport_image->getClientOriginalExtension();
            $request->sport_image->move(public_path('images'), $imageName);
            return redirect()->back()->with('success_message', $request->name. ' has been successfully added');
        } else {
            return redirect()->back()->with('error_message', 'An error occurred');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $game = Game::query()->find($id);
        return view('admin.games.update_game', ['game' => $game]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'sport_image' => 'image|mimes:png,jpg,jpeg|max:2048'
        ]);
        $game = Game::query()->find($id);
        if ($request->hasFile('sport_image'))
        {
            $game->update([
                'name' => $request->name,
                'sport_image' => $request->name.'.'.$request->sport_image->getClientOriginalExtension()
            ]);

            $imageName = $request->name.'.'.$request->sport_image->getClientOriginalExtension();
            $request->sport_image->move(public_path('images'), $imageName);
        } else {
            $game->update(['name' => $request->name,]);
        }
        return redirect()->back()->with('success_message', $request->name. ' has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $game = Game::query()->find($id);
        $image_path = public_path('images/'.$game->sport_image);
        File::delete($image_path);
        $game->delete();
        return redirect()->back()->with('success_message', $game->name.' has been deleted');
    }
}
