<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $products;
    public $totalPrice = 0;
    public $totalQty = 0;

    public function __construct($cart)
    {
        parent::__construct();

        if ($cart) {
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQty = $cart->totalQty;
        }
    }

    public function add($product , $id)
    {
        //$price = $product->sale ? $product->sale : $product->price;
        $_item = ['qty' => 0, 'price' => $product->sale, 'item' => $product];
        if ($this->products && array_key_exists($id, $this->products)) {
            $_item = $this->products[$id];
        }

        $_item['qty']++;
        $_item['price'] = $_item['qty'] * $product->sale;

        $this->products[$id] = $_item;
        $this->totalPrice += $product->sale;
        $this->totalQty++;
    }
}
