<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::inRandomOrder()->take(6)->get();
        $i = 0;
        $products1 = [];
        $products2 = [];
        foreach ($products as $k => $x) {
            if ($i < count($products) / 2) {
                $products1[$k] = $x;
            } else {
                $products2[$k] = $x;
            }
            $i = $i + 1;
        }

        return view(
            'index',
            [
                'products1'  =>  $products1,
                'products2'  =>  $products2
            ]
        );
    }
}
