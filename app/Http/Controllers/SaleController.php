<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SaleController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'customer_id' => 'required|exists:customers,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $product = Product::findOrFail($request->product_id);

        $unitPrice = $product->price;
        $totalPrice = $unitPrice * $request->quantity;

        $sale = new Sale();
        $sale->customer_id = $request->input('customer_id');
        $sale->product_id = $request->input('product_id');
        $sale->unit_price = $unitPrice;
        $sale->total_price = $totalPrice;
        $sale->quantity = $request->input('quantity');
        $sale->save();


        return response()->json($sale, 201);
    }
}
