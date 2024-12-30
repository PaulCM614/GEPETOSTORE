<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Byke;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    // Método index: Listar compras
    public function index()
    {
        $purchases = Purchase::with('byke', 'byke.supplier')->get();
        return view('modules.purchases.index', compact('purchases'));
    }

    // Método create: Mostrar formulario para crear compra
    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        $bykes = Byke::all();
        return view('modules.purchases.create', compact('categories', 'suppliers', 'bykes'));
    }

    // Método store: Guardar compra
    public function store(Request $request)
    {
        // Validar datos
        $request->validate([
            'existing_byke' => 'required|boolean',
            'byke_id' => 'nullable|exists:bykes,id',
            'nombre' => 'nullable|string',
            'descripcion' => 'nullable|string',
            'cantidad' => 'required|integer|min:1',
            'supplier_id' => 'required_if:existing_byke,false|exists:suppliers,id',
            'category_id' => 'required_if:existing_byke,false|exists:categories,id',
            'precio_compra' => 'required_if:existing_byke,false|numeric|min:0',
            'precio_venta' => 'required_if:existing_byke,false|numeric|min:0',
        ]);
    
        if ($request->existing_byke) {
            // Bicicleta existente
            $byke = Byke::find($request->byke_id);
            if (!$byke) {
                return redirect()->back()->withErrors(['byke_id' => 'La bicicleta seleccionada no existe.']);
            }
    
            // Incrementar stock de la bicicleta existente
            $byke->stock += $request->cantidad;
            $byke->save();
    
            // Crear registro de compra
            Purchase::create([
                'byke_id' => $byke->id,
                'cantidad' => $request->cantidad,
                'precio_unitario' => $byke->precio_compra, // Usar el precio de compra existente
            ]);
        } else {
            // Crear bicicleta nueva
            $byke = Byke::create([
                'nombre' => $request->nombre,
                'descripcion' => $request->descripcion,
                'precio_compra' => $request->precio_compra,
                'precio_venta' => $request->precio_venta,
                'stock' => $request->cantidad,
                'supplier_id' => $request->supplier_id,
                'category_id' => $request->category_id,
            ]);
    
            // Crear registro de compra
            Purchase::create([
                'byke_id' => $byke->id,
                'cantidad' => $request->cantidad,
                'precio_unitario' => $request->precio_compra, // Precio unitario de la bicicleta nueva
            ]);
        }
    
        // Redireccionar al índice con mensaje de éxito
        return redirect()->route('purchase.index')->with('success', 'Compra registrada exitosamente.');
    }
    
    

    // Método show: Mostrar detalles de una compra
    public function show($id)
    {
        $purchase = Purchase::findOrFail($id);
        return view('modules.purchases.show', compact('purch    ase'));
    }

    // Método edit: Mostrar formulario para editar una compra
    public function edit($id)
    {
        $purchase = Purchase::findOrFail($id);
        return view('modules.purchases.edit', compact('purchase'));
    }

    // Método update: Actualizar una compra
    public function update(Request $request, $id)
    {
        $request->validate([
            'cantidad' => 'required|integer|min:1',
        ]);

        $purchase = Purchase::findOrFail($id);
        $purchase->update([
            'cantidad' => $request->cantidad,
        ]);

        return redirect()->route('purchase.index');
    }

    // Método destroy: Eliminar una compra
    public function destroy($id)
    {
        $purchase = Purchase::findOrFail($id);
        $purchase->delete();

        return redirect()->route('purchase.index');
    }
}
