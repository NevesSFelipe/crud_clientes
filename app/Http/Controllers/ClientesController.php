<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    public function index()
    {
        $clientes = DB::table('clientes')->orderBy('nome')->get();
        return view('clientes.index', compact('clientes'));
    }
}
