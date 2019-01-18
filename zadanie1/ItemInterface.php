<?php

/**
 * Interface ItemInterface
 */
interface ItemInterface
{
    /**
     * @return int
     */
    public function getCount();

    /**
     * @param int $count
     * @return Item
     */
    public function setCount(int $count);
}