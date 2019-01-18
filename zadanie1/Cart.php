<?php

/**
 * Class Cart
 */
class Cart implements CartInterface
{

    /**
     * @var
     */
    private $cratedAt;

    /**
     * @var array
     */
    private $items = [];

    /**
     * @return mixed
     */
    public function getCratedAt(): \DateTime
    {
        return $this->cratedAt;
    }

    /**
     * @param mixed $cratedAt
     * @return Cart
     */
    public function setCratedAt(\DateTime $cratedAt): self
    {
        $this->cratedAt = $cratedAt->format('Y-m-d H:i:s');
        return $this;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param ItemInterface $item
     * @return Cart
     */
    public function addItem(ItemInterface $item): self
    {
        $this->items[] = $item;
        return $this;
    }


}