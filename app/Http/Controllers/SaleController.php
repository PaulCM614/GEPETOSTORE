<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Byke;
use App\Models\Customer;
use Barryvdh\DomPDF\Facade\Pdf;


class SaleController extends Controller
{

    
    // Método index: Listar ventas
    public function index()
    {
        $sales = Sale::with('byke', 'customer', 'user')->get(); // Incluir bicicleta, cliente y usuario
        return view('modules.sales.index', compact('sales'));
    }

    // Método create: Mostrar formulario para crear venta
    public function create()
    {
        $bykes = Byke::where('stock', '>', 0)->get(); // Solo bicicletas con stock disponible
        $customers = Customer::all(); // Obtener todos los clientes registrados
        return view('modules.sales.create', compact('bykes', 'customers'));
    }

    // Método store: Registrar venta
    public function store(Request $request)
    {
        // Validar datos
        $request->validate([
            'byke_id' => 'required|exists:bykes,id',
            'customer_id' => 'required|exists:customers,id', // Validar que el cliente exista
            'cantidad' => 'required|integer|min:1',
        ]);

        $byke = Byke::findOrFail($request->byke_id);

        if ($byke->stock < $request->cantidad) {
            return redirect()->back()->withErrors(['cantidad' => 'Stock insuficiente para esta bicicleta.']);
        }

        // Reducir stock de la bicicleta
        $byke->stock -= $request->cantidad;
        $byke->save();

        // Registrar la venta
        Sale::create([
            'byke_id' => $byke->id,
            'user_id' => auth()->id(), // Usuario autenticado que realiza la venta
            'customer_id' => $request->customer_id, // Cliente seleccionado
            'cantidad' => $request->cantidad,
            'precio_unitario' => $byke->precio_venta,
            'total' => $byke->precio_venta * $request->cantidad,
        ]);

        return redirect()->route('sale.index')->with('success', 'Venta registrada exitosamente.');
    }

    // Método show: Mostrar detalles de una venta
    public function show($id)
    {
        $sale = Sale::with('byke', 'customer', 'user')->findOrFail($id);
        return view('modules.sales.show', compact('sale'));
    }

    // Método destroy: Eliminar una venta
    public function destroy($id)
    {
        $sale = Sale::findOrFail($id);

        // Revertir stock de la bicicleta
        $byke = $sale->byke;
        $byke->stock += $sale->cantidad;
        $byke->save();

        $sale->delete();

        return redirect()->route('sale.index')->with('success', 'Venta eliminada exitosamente.');
    }

    public function generatePDF($id)
    {
        $sale = Sale::with('byke', 'customer', 'user')->findOrFail($id);

        $pdf = Pdf::loadView('modules.sales.pdf', compact('sale'));

        // Descargar el PDF con un nombre dinámico
        return $pdf->download('Comprobante_Venta_' . $sale->id . '.pdf');
    }

}
