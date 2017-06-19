<?php
/**
 * Date: 8/8/16
 * Time: 9:26 AM
 */
namespace Task\Entity;

/**
 * Class Ship
 */
class Ship
{
    use Position;
    
    protected $id;
    
    protected $weapon;
    
    protected $tool;

    /**
     * @var Fleet
     */
    protected $fleet;
    
    public function __construct($id, $fleet, $weapon, $tool)
    {
        $this->id;
        $this->fleet = $fleet;
        $this->weapon = $weapon;
        $this->tool = $tool;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function fix()
    {
        if (!$this->tool) {
            return false;
        }
        $this->fleet->getMothership()->increase();
    }
    
    public function attack(Fleet $fleet)
    {
        if (!$this->weapon) {
            return false;
        }
        $fleet->getMothership()->decrease();
    }
}
