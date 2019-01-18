<?php

/**
 * Class Product
 */
class Product
{

    private $name;
    private $price;
    private $vat;

    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Product
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return intval($this->price) / 100;
    }

    /**
     * @param float $price
     * @return Product
     */
    public function setPrice(float $price): self
    {
        $this->price = floatval($price) * 100;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVat(): int
    {
        return $this->vat;
    }

    /**
     * @param mixed $vat
     * @return Product
     */
    public function setVat(int $vat): self
    {
        $this->vat = $vat;
        return $this;
    }


}