<?php

/**
 * Interface CartInterface
 */
interface CartInterface
{

    /**
     * @return DateTime
     */
    public function getCratedAt();

    /**
     * @param DateTime $cratedAt
     * @return CartInterface
     */
    public function setCratedAt(\DateTime $cratedAt);

    /**
     * @return array
     */
    public function getItems(): array;

    /**
     * @param ItemInterface $item
     * @return CartInterface
     */
    public function addItem(ItemInterface $item);

}