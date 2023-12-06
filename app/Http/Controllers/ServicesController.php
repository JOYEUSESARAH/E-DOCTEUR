<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Services::all();
        return view('Services.liste', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Services.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'type_service'=>'required',
            'description'=>'required',

        ]);

        $services = new Services();

        $services->type_service = $request->type_service;
        $services->description = $request->description;


        $services->save();

        return redirect()->route('services.index')->with('status', 'Service a  été ajouté avec succes.');

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {

        return view('Services.details', [

            'Services' => Services::find($id)
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $services = Services::find($id);
        return view('Services.modifier',compact('services'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $services = Services::find($id);

        $services->update([
            'type_service' => $request->type_service,
            'description' => $request->description,

        ]);

        return redirect()->route('services.index')->with('status', 'Service a  été modifié avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $services = Services::find($id);
        $services->delete();
        return redirect()->route('services.index')->with('status', 'Service a  été supprimé avec succes.');
    }
}
