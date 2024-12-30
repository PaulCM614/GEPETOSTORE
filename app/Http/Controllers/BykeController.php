<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use App\Models\Byke;
use App\Models\Category;
use App\Models\Purchase;

use Illuminate\Http\Request;

class BykeController extends Controller
{
    //

    public function index()
    {
        $bykes = Byke::all();
        return view('modules.bykes.index', compact('bykes'));
    }

    public function show($id)
    {
        $byke = Byke::findOrFail($id);
        return view('modules.bykes.show', compact('byke'));
    }

}
