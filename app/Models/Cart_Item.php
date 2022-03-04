<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_Item extends Model
{
    use HasFactory;
    protected $table='cart_item';
    protected $fillable=[
        'session_id',
        'product_id',
        'quantity',
        
];
public function shopping_session(){
    return $this->belongsTo(Shopping_Session::class,'session_id','id');
}
public function product(){
    return $this->belongsTo(Product::class,'product_id','id');
}
}
