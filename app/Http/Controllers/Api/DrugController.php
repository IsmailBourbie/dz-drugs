<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Drug;
use Illuminate\Http\Request;

class DrugController extends Controller
{
    public function index() {
        return response()->json(Drug::filter(request(['dci', 'dosage', 'form']))->get());
    }

    public function show(Drug $drug) {
        return response()->json($drug);
    }
}
