<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping_Session extends Model
{
    use HasFactory;
    protected $table='shopping_session';
    protected $fillable=[
        'user_id',
        'total',
        
];
public function user(){
    return $this->belongsTo(User::class,'user_id','id');
}
}
