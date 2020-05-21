<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $products;
    public $totalPrice = 0;
    public $totalQty = 0;
    public $discount = 0;
    public $coupon;

    public function __construct($cart)
    {
        parent::__construct();

        if ($cart) {
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQty = $cart->totalQty;
            $this->discount = $cart->discount;
            $this->coupon = $cart->coupon;
        }
    }

    // Thêm sản phẩm khỏi giỏ hàng
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

    // Xóa sản phẩm khỏi giỏ hàng
    public function remove($id)
    {
        // giảm sl
        $this->totalQty -= $this->products[$id]['qty'];
        // giảm giá
        $this->totalPrice -= $this->products[$id]['price'];

        unset($this->products[$id]);

    }

    // Cập nhật giỏ hàng
    public function store($id , $qty)
    {
        // Xóa số lượng + giá của thằng hiện tại để cập nhật lại
        $this->totalQty = $this->totalQty - $this->products[$id]['qty'];
        $this->totalPrice = $this->totalPrice - $this->products[$id]['price'];

        // Cập nhật số lượng && giá của sẩn phẩm
        $this->products[$id]['qty'] = $qty;
        $this->products[$id]['price'] = $qty * $this->products[$id]['item']->sale;

        // cập nhật lại giỏ hàng
        $this->totalQty = $this->totalQty + $this->products[$id]['qty'];
        $this->totalPrice = $this->totalPrice + $this->products[$id]['price'];
    }
}
