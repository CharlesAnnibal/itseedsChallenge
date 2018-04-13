<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
class ApiProductController extends Controller
{
    public function request(Request $request,Product $product) {
        $response = $product->get();
        return json_encode($response);
    }
}
