<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsTo('App\Category','category_id','id');
    }

    public function supplier(){
        return $this->belongsTo('App\Supplier','supplier_id','id');
    }
 
    public function transactions()
    {
        return $this->belongsToMany(Transaction::class, 'product_transaction', 'product_id', 'transaction_id')
        ->withPivot('quantity','harga_produk');
    }
}
