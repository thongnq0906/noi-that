<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill_detail extends Model
{
    public function Bill()
    {
    	return $this->belongTo(Bill::class, 'bill_id');
    }

    public function Product()
    {
    	return $this->belongTo(Product::class, 'product_id');
    }
}
