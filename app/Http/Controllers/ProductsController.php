<?php

namespace App\Http\Controllers;

use App\Models\Products;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
    }
    
    public function V1_GetProductsList(){
        $products = Products::where('display_in_enquiry', 1)
               ->orderBy('name')
               ->get();
        return response()->json($products,200,array());
    }
}