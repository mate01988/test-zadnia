<?php

/**
 * Class Order
 */
class Order{

    private $createdAt;
    private $firstname;
    private $lastname;
    private $city;
    private $cart;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return mixed
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     * @return Order
     */
    public function setFirstname($firstname): self
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     * @return Order
     */
    public function setLastname($lastname): self
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     * @return Order
     */
    public function setCity($city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCart(): CartInterface
    {
        return $this->cart;
    }

    /**
     * @param mixed $cart
     * @return Order
     */
    public function setCart(CartInterface $cart): self
    {
        $this->cart = $cart;
        return $this;
    }



}