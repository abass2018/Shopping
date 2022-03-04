<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Items extends Model
{
    use HasFactory;
    protected $table='order_items';
    protected $fillable=[
        'order_id',
        'product_id',
        
                                                                      
];
public function Order_Details(){
    return $this->belongsTo(Order_Details::class,'order_id','id');
}
public function Product(){
    return $this->belongsTo(Product::class,'product_id','id');
}
}
