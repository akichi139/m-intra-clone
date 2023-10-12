<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleOrder extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function product()
    {
        return $this->belongsToMany(Product::class, 'product_saleorder');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
