<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Details extends Model
{
    use HasFactory;
    protected $table='order_details';
    protected $fillable=[
        'user_id',
        'payment_id',
        'total',
        
];
public function user(){
    return $this->belongsTo(User::class,'user_id','id');
}
public function payment_details(){
    return $this->belongsTo(Payment_Details::class,'payment_id','id');
}
}
