<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Drug;
use Illuminate\Http\Request;

class GenericsController extends Controller
{
    public function __invoke(Drug $drug)
    {
        return response()->json($drug->generics()->get());
    }
}
