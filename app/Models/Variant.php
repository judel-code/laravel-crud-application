<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $table = 'variants';
    protected $fillable = [
        'product_id',
        'sap_product_code',
        'web_product_code',
        'name',
        
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id','id');
    }


}


