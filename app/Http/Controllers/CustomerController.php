<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $customers = Customer::all();
        return view('modules.customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('modules.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $customer = new Customer;
        $customer->nombre = $request->nombre;
        $customer->apellido = $request->apellido;
        $customer->email = $request->email;
        $customer->telefono = $request->telefono;
        $customer->direccion = $request->direccion;
        $customer->save();

        return redirect()->route('customer.index')->with('success', 'Cliente creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $customer = Customer::findOrFail($id);
        return view('modules.customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $customer = Customer::findOrFail($id);
        return view('modules.customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $customer = Customer::findOrFail($id);
        $customer->nombre = $request->nombre;
        $customer->apellido = $request->apellido;
        $customer->email = $request->email;
        $customer->telefono = $request->telefono;
        $customer->direccion = $request->direccion;
        $customer->save();

        return redirect()->route('customer.index')->with('warning', 'Cliente actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect()->route('customer.index')->with('error', 'Cliente eliminado correctamente');
    }
}
