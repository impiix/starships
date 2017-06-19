<?php
/**
 * Date: 8/8/16
 * Time: 9:28 AM
 */
namespace Task\Entity;

/**
 * Class Mothership
 */
class Mothership extends Ship
{
    protected $life = 100;

    public function __construct()
    {
        
    }

    public function setFleet(Fleet $fleet)
    {
        $this->fleet = $fleet;
    }

    public function increase()
    {
        if ($this->life < 100) {
            $this->life++;
        }
    }

    public function decrease()
    {
        $this->life--;
        if ($this->life < 1) {
            unset($this->fleet);
        }
    }
}
