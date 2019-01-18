<?php

/**
 * Class Item
 */
class Item extends Product implements ItemInterface {

    /**
     * @var int
     */
    private $count = 0;

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return Item
     */
    public function setCount(int $count): Item
    {
        $this->count = $count;
        return $this;
    }


}