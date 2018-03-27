<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function Bill()
    {
    	return $this->hasMany(Bill::class, 'payment_id');
    }
}
