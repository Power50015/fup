<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function presentPrice()
    {
        $price = $this->product_price;
        return "$" . $price;
    }
}