<?php 

namespace SCP;

class item
{
	protected $itemNumber;
	protected $clearanceLevel;
	protected $containmentClass;
	protected $disruptionClass;
	protected $riskClass;
	protected $secondaryContainmentClass;

	public function __construct($_itemNumber, $_clearanceLevel, $_containmentClass, $_disruptionClass, $_riskClass, $_secondaryContainmentClass = null)
    {
		$this->itemNumber = $_itemNumber;
        $this->clearanceLevel = $_clearanceLevel;
        $this->containmentClass = $_containmentClass;
        $this->disruptionClass = $_disruptionClass;
        $this->riskClass = $_riskClass;
        $this->secondaryContainmentClass = $_secondaryContainmentClass;
    }

	public function itemNumber()
    {
        return $this->itemNumber;
    }

    public function clearanceLevel()
    {
        return $this->clearanceLevel;
    }

    public function containmentClass()
    {
        return $this->containmentClass;
    }

    public function discuptionClass()
    {
        return $this->disruptionClass;
    }

    public function riskClass()
    {
        return $this->riskClass;
    }

    public function secondaryContainmentClass()
    {
        return $this->secondaryContainmentClass;
    }

    public function print_it()
    {
        echo "Item#: $this->itemNumber\n";
        echo "Level $this->clearanceLevel: {$this->clearanceLevel->getKey()} \n";
        echo "Containment Class: {$this->containmentClass->getKey()}\n";
		if( $this->secondaryContainmentClass != null)
			echo "Secondary Class: {$this->secondaryContainmentClass->getKey()}\n";;
        echo "Disruption Class: {$this->disruptionClass->getKey()}\n";
        echo "Risk Class: {$this->riskClass->getKey()}\n";
		
    }
}