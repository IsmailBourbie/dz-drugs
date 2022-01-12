<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dci;
use Illuminate\Http\Request;

class DciController extends Controller
{
    public function index()
    {
        return response()->json(Dci::all());
    }

    public function show(Dci $dci)
    {
        return response()->json($dci);
    }
}
