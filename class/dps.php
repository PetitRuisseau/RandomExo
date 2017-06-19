<?php
class DPS extends Personnage {
    protected $critique;
    protected $esquive;

    public function __construct() {
        parent::__construct();
        $this->critique = rand(5, 10);
        $this->esquive = rand(5, 10);
    }

    public function reconstruct($vie, $mana, $chance, $charisme, $intelligence, $attaque, $defense, $critique, $esquive) {
        parent::reconstruct($vie, $mana, $chance, $charisme, $intelligence, $attaque, $defense);
        $this->critique = $critique;
        $this->esquive = $esquive;
    }

    public function attaqueSpecial(Personnage $victime) {
        $this->mana -= 10;
        $dommage = (($this->attaque * 2) + $this->critique) - $victime->defense;
        $victime->vie -= $dommage;
    }

    public function genererHTML() {
        return
        "<ul>
        <li>Nom : ".__CLASS__."</li>".
        $this->genererStat()
        ."</ul>";
    }

    public function genererStat() {
        return parent::genererStat().
        "<li>critique : ".$this->critique."</li>";
    }
}