<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Byke;
use App\Models\Customer; // Importa el modelo Customer

class ConsultaController extends Controller
{

    public function porCustomer()
    {
        // Obtener todos los clientes que hicieron compras
        $ventas = Sale::with(['customer', 'byke'])->get();

        return view('consultas.customer', compact('ventas'));
    }

    public function porProducto()
    {
        // Obtener todas las bicicletas con su información
        $bykes = Byke::with(['supplier', 'category'])->get();

        return view('consultas.bykes', compact('bykes'));
    }

    public function porFecha()
    {
        // Obtener todas las ventas ordenadas por fecha
        $ventas = Sale::with(['customer', 'byke'])->orderBy('created_at', 'desc')->get();
        return view('consultas.fecha', compact('ventas'));
    }

    public function consultaPorCliente()
    {
        $customers = Customer::all();
        return view('consultas.seleccionar_cliente', compact('customers'));
    }

    public function mostrarConsultaPorCliente(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
        ]);

        $customer = Customer::find($request->customer_id);
        $sales = Sale::where('customer_id', $request->customer_id)->get();

        return view('consultas.resultado_cliente', compact('customer', 'sales'));
    }

    public function consultaPorBicicleta()
    {
        $bykes = Byke::all();
        return view('consultas.seleccionar_bicicleta', compact('bykes'));
    }

    public function mostrarConsultaPorBicicleta(Request $request)
    {
        $request->validate([
            'byke_id' => 'required|exists:bykes,id',
        ]);

        $byke = Byke::find($request->byke_id);
        $sales = Sale::where('byke_id', $request->byke_id)->get();

        return view('consultas.resultado_bicicleta', compact('byke', 'sales'));
    }

    public function consultaPorFecha()
    {
        $dates = Sale::selectRaw('DATE(created_at) as date')->distinct()->get();
        return view('consultas.seleccionar_fecha', compact('dates'));
    }

    public function mostrarConsultaPorFecha(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
        ]);

        $sales = Sale::whereDate('created_at', $request->date)->get();

        return view('consultas.resultado_fecha', compact('sales'));
    }
} 