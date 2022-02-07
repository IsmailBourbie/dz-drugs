<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dci;
use App\Models\Drug;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->input('q');
        $limit = $request->input('limit') ?? '*';

        // Search in drug name
        $drugs = Drug::query()->where('name', 'LIKE', "%{$q}%")->limit($limit)->get();

        // Search in Dci name
        $dci = Dci::query()->where('name', 'LIKE', "%{$q}%")->limit($limit)->get();
        

        return response()->json([
            'drugs' => $drugs,
            'dci' => $dci 
        ], 200);
    }
}
