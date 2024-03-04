<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'product_id', 'quantity', 'unit_price', 'total_price'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
