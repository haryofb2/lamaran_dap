<?php

namespace App\Helpers;

use App\counterdocument;
use App\mkey;
use App\tablelist;
use Carbon\Carbon;

class Player
{

    /**
     * @var array $diceInCup
     */
    private $diceInCup = [];

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var int $position
     */
    private $position;

    /**
     * @var int $point
     */
    private $point;

    /**
     * @return array
     */
    public function getDiceInCup()
    {
        return $this->diceInCup;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Player constructor.
     * @param int $numberOfDice
     */
    public function __construct($numberOfDice, $position, $name = '')
    {
        /* Set point to 0 */
        $this->point = 0;

        /* position 0 is the left most */
        $this->position = $position;

        /* Optional name, example Player A */
        $this->name = $name;

        /* Initialize array of dice */
        for ($i = 0; $i < $numberOfDice; $i++) {
            array_push($this->diceInCup, new Dice());
        }
    }

    /**
     * Add point
     *
     * @var int $point
     */
    public function addPoint($point)
    {
        $this->point += $point;
    }

    /**
     * Get point
     *
     * @return int
     */
    public function getPoint()
    {
        return $this->point;
    }

    public function play()
    {
        foreach($this->diceInCup as $dice){
            $dice->roll();
        }
    }

    /**
     * @param int $key
     */
    public function removeDice($key)
    {
        unset($this->diceInCup[$key]);
    }

    /**
     * @param Dice $dice
     */
    public function insertDice($dice)
    {
        array_push($this->diceInCup, $dice);
    }
}

