<?php 
	// this file will extend Player.php

	class ChildClass extends Player{
		public $name; //username
	    public $xp; //total experience
	    public $st; //skill total
	    public $ttp; //total time played in hours
	    public $aoa; //age of the account in years
	    public $tw; //total wealth
	    public $wcxp; //woodcutting xp
	    public function __construct($n, $x, $s, $t, $a, $w, $wcxp) {
	        $this->username   = $n;
	        $this->xp         = $x;
	        $this->skill      = $s;
	        $this->time       = $t;
	        $this->age        = $a;
	        $this->wealth     = $w;
	       	$this->woodcuttingxp = $wcxp;
   		}
   		public function getWoodcuttingXP(){
   		  return $this->woodcuttingxp;
   		}
   		public function addWoodcuttingXP($newWoodXP){
   			$this->woodcuttingxp += $newWoodXP;
   			$this->addTotalXP($newWoodXP);
   			$this->addSkillTotal(94);
   			$this->addWealth(15000000);
   			$this->addTimePlayed(72);
   		}
	    public function getOldTotalXP() {
	      return parent::getTotalXP();
	    }
	    private function addTotalXP($newXP) {
	      echo "<!-- Adding xp to old total xp " . $newXP . "-->";
	      $this->xp = ($newXP + $this->getOldTotalXP());
	    }
	    public function getOldSkillTotal() {
	      return parent::getSkillTotal();
	    }
	    private function addSkillTotal($newLevels) {
	      echo "<!-- Setting new skill total to " . $newLevels . "-->";
	      $this->skill= ($newLevels + $this->getOldSkillTotal());
	    }
	    public function getOldTimePlayed() {
	      return parent::getTimePlayed();
	    }
	    private function addTimePlayed($newHours) {
	      echo "<!-- Setting new time played to " . $newHours . "-->";
	      $this->time = ($newHours + $this->getOldTimePlayed());
	    }
	   	public function getOldTotalWealth() {
	      return parent::getTotalWealth();
	    }
	    private function addWealth($newWealth) {
	      echo "<!-- Setting new time played to " . $newWealth . "-->";
	      $this->wealth = ($newWealth + $this->getOldTotalWealth());
	    }
	    public function __toString() {
     		return $parent = parent::__toString();
   		}
	}
