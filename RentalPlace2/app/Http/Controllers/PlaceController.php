<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Place;
use Illuminate\Http\Request;

class placeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $places = Place::all();
        return view('places.index', compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $places = Place::all();
        $clients = Client::all();

        return view('places.create', compact('places', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $places = new Place();
        $places->phone = $request->phone;
        $places->client_id = $request->client_id;
        $places->address = $request->address;
        $places->price = $request->price;
        $places->save();
        return redirect('places');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $places = Place::find($id);
        return view('places.show', compact('places'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $places = Place::find($id);
        return view('places.edit', compact('places'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $places = Place::find($id);
        $places->update($request->all());
        $places->save();
        return redirect()->route('places.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $places = Place::find($id);
        $places->delete();
        return redirect()->route('places.index');
    }
}