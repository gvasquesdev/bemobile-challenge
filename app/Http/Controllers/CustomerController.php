<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy('id')->get(['id', 'name', 'cpf']);
        return response()->json($customers);
    }

    public function show($id)
    {
        $customer = Customer::with([
            'sales' => function ($query) {
                $query->latest();
            }
        ])->findOrFail($id);
        return response()->json($customer);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'cpf' => 'required|unique:customers',
        ]);

        $customer = Customer::create($request->all());
        return response()->json($customer, 201);
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'cpf' => 'required|unique:customers,cpf,' . $id,
        ]);

        $customer->update($request->all());
        return response()->json($customer, 200);
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->sales()->delete();
        $customer->delete();
        return response()->json(null, 204);
    }

    public function filterSalesByMonthAndYear($id, $month, $year)
    {
        $customer = Customer::findOrFail($id);

        $sales = $customer->sales()
            ->whereMonth('created_at', $month)
            ->whereYear('created_at', $year)
            ->latest()
            ->get();

        return response()->json($sales);
    }
}

