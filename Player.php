<?php
	// This is the file for the parent class

	class Player {
    private $n; //username
    private $x; //total experience
    private $s; //skill total
    private $t; //total time played in hours
    private $a; //age of the account in years
    private $w; //total wealth
    public function __construct($n, $x, $s, $t, $a, $w) {
        $this->username   = $n;
        $this->xp         = $x;
        $this->skill      = $s;
        $this->time       = $t;
        $this->age        = $a;
        $this->wealth     = $w;
    }
    public function getUsername() {
        return $this->username;
    }
    public function getTotalXP() {
        return $this->xp;
    }
    public function getSkillTotal() {
        return $this->skill;
    }
    public function getTimePlayed() {
        return $this->time;
    }
    public function getAccountAge() {
        return $this->age;
    }
    public function getTotalWealth() {
        return $this->wealth;
    }
    public function __toString() {
        $who =  $this->getUsername() . " has been playing Runescape for " . $this->getAccountAge() . " years.";
        $mainStats = "This player has " . $this->getTotalXP() . " total experience and a skill total of " . $this->getSkillTotal() . " out of 2715.";
        $secondaryStats = "The account also has a total wealth of " . $this->getTotalWealth() . " gold pieces, which has been amassed over " . $this->getTimePlayed() . " hours of gameplay.";
        return $who . "<br>" . $mainStats . "<br>" . $secondaryStats . "<br>";
    } 
}
