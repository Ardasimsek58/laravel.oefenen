<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Cars::all();
        return view('admin.cars.index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cars::create($request->all());

        return redirect()->route('admin.cars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cars $car)
    {
        // GECORRIGEERD: Stuurt de gekozen auto nu door naar de detailpagina
        return view('admin.cars.show', ['car' => $car]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cars $car)
    {
        return view('admin.cars.edit', ['car' => $car]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cars $car)
    {
        $car->update($request->all());

        return redirect()->route('admin.cars.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Cars::destroy($id);

        return redirect()->route('admin.cars.index');
    }
}
