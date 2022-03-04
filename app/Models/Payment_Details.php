<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_Details extends Model
{
    use HasFactory;
    protected $table='payment_details';
    protected $fillable=[
        'order_id',
        'amount',
        'status',
        
];
public function order_details(){
    return $this->belongsTo(Order_Details::class,'order_id','id');
}
}
