<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Laboratory;
use Illuminate\Http\Request;

class LaboratoryController extends Controller
{
    public function index()
    {
        return response()->json(Laboratory::all());
    }

    public function show(Laboratory $laboratory)
    {
        return response()->json($laboratory);
    }
}
