<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_id';
    public $incrementing = false;
    public function presentPrice()
    {
        $price = $this->product_price;
        return "$" . $price;
    }
}
