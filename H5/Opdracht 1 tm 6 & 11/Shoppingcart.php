<?php
include "Ishoppingcart.php";
abstract class Shoppingcart implements Ishoppingcart
{
    protected $shoppingcart = array();
    //implementeren addToCart()
    public function addToCart(Item $item)
    {
        $this->shoppingcart[] = $item;
    }
    //printCard blijft abstract
    public abstract function printCart();
}