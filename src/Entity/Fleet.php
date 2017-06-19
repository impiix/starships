<?php
/**
 * Date: 8/8/16
 * Time: 9:26 AM
 */
namespace Task\Entity;

/**
 * Class Fleet
 */
class Fleet
{
    use Position;
    
    protected $ships = [];
    
    protected $mothership;
    
    public function __construct(Mothership $mothership)
    {
        $this->mothership = $mothership;
    }
    public function addShip(Ship $ship)
    {
        $this->ships[$ship->getId()] = $ship;
    }

    /**
     * @return Mothership
     */
    public function getMothership()
    {
        return $this->mothership;
    }
}
