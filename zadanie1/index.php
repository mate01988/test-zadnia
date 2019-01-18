<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/ItemInterface.php';
require_once __DIR__ . '/Item.php';
require_once __DIR__ . '/CartInterface.php';
require_once __DIR__ . '/Cart.php';
require_once __DIR__ . '/Order.php';


// tworzenie produktów
$product1 = new Product();
$product1->setName('Książka');
$product1->setPrice(22.33);
$product1->setVat(8);

$product2 = new Product();
$product2->setName('Kubek');
$product2->setPrice(22.33);
$product2->setVat(23);


// dodatnie porduktów do koszyka
$item1 = new Item();
$item1->setVat($product1->getPrice());
$item1->setPrice($product1->getPrice());
$item1->setName($product1->getName());
$item1->setCount(1);

$item2 = new Item();
$item2->setVat($product2->getPrice());
$item2->setPrice($product2->getPrice());
$item2->setName($product2->getName());
$item2->setCount(2);

// Tworzenie koszyka
$cart = new Cart();
$cart->setCratedAt(new \DateTime());
$cart->addItem($item1);
$cart->addItem($item2);

// Składanie zamówienia

$order = new Order();
$order->setFirstname('Jan')
    ->setLastname('Nowak')
    ->setCart($cart);