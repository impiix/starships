<?php
namespace Task\Entity;

/**
 * Date: 8/8/16
 * Time: 9:31 AM
 */
trait Position
{
    protected $x;
    
    protected $y;
    
    public function move($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    
    public function getPosition()
    {
        return $this->x . " x " . $this->y;
    }
}
