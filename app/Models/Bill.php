<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function Status()
    {
    	return $this->belongTo(Status::class, 'status_id');
    }

    public function Payment()
    {
    	return $this->belongTo(Payment::class, 'payment_id');
    }

    public function Bill_detail()
    {
    	return $this->hasMany(Bill_detail::class, 'bill_id');
    }
}
