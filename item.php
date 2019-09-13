<?php 

namespace SCP;

class item
{
	protected $clearencelevel;
	protected $containmentclass;
	protected $disruptionclass;
	protected $riskclass;
	protected $secondarycontainmentclass;

	public function __construct($_clearencelevel, $_containmentclass, $_disruptionclass, $_riskclass, $_secondarycontainmentclass)
    {
        $this->clearencelevel = $_clearencelevel;
        $this->containmentclass = $_containmentclass;
        $this->disruptionclass = $_disruptionclass;
        $this->riskclass = $_riskclass;
        $this->secondarycontainmentclass = $_secondarycontainmentclass;
    }

    public function clearancelevel()
    {
        return $this->clearencelevel;
    }

    public function containmentclass()
    {
        return $this->containmentclass;
    }

    public function discuptionclass()
    {
        return $this->disruptionclass;
    }

    public function riskclass()
    {
        return $this->riskclass;
    }

    public function secondarycontainmentclass()
    {
        return $this->secondarycontainmentclass;
    }


    public function print_it()
    {
        echo "";
    }
}