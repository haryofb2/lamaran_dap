<?php

namespace App\Helpers;

use App\counterdocument;
use App\mkey;
use App\tablelist;
use Carbon\Carbon;

class Dice {
    /**
     * @var int $topSideVal
     */
    private $topSideVal;

    /**
     * @return int
     */
    public function getTopSideVal()
    {
        return $this->topSideVal;
    }

    /**
     * @return int
     */
    public function roll()
    {
        $this->topSideVal =  rand(1,6);
        return $this;
    }

    /**
     * @param int $topSideVal
     * @return Dice
     */
    public function setTopSideVal($topSideVal)
    {
        $this->topSideVal = $topSideVal;
        return $this;
    }
}
