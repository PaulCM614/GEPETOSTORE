<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $suppliers = Supplier::all();
        return view('modules.suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('modules.suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $supplier = new Supplier;
        $supplier->nombre = $request->nombre;
        $supplier->email = $request->email;
        $supplier->pagina_web = $request->pagina_web;
        $supplier->pais = $request->pais;
        $supplier->save();
        return redirect()->route('supplier.index')->with('success', 'Proveedor creado correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $supplier = Supplier::findOrFail($id);
        return view('modules.suppliers.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $supplier = Supplier::findOrFail($id);
        return view('modules.suppliers.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $supplier = Supplier::findOrFail($id);
        $supplier->nombre = $request->nombre;
        $supplier->email = $request->email;
        $supplier->pagina_web = $request->pagina_web;
        $supplier->pais = $request->pais;
        $supplier->save();

        return redirect()->route('supplier.index')->with('warning', 'Proveedor actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();

        return redirect()->route('supplier.index')->with('error', 'Proveedor eliminado correctamente');
    }
}
