<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Admin;
use App\Models\Client;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();
        return view('admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $admins = Admin::all();
        return view('admins.create', compact('admins', 'client'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Admin::create($request->all());
      
        return redirect()->route('admins.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $admins = Admin::find($id);
        return view('admins.show', compact('admins'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admins = Admin::find($id);
        return view('admins.edit', compact('admins'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $admins = Admin::find($id);
        $admins->update($request->all());
        $admins->save();
        return redirect()->route('admins.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admins = Admin::find($id);
        $admins->delete();
        return redirect()->route('admins.index');
    }
}