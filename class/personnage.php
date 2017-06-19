<?php
class Personnage {
    protected $vie;
    protected $mana;
    protected $chance;
    protected $charisme;
    protected $intelligence;
    protected $attaque;
    protected $defense;

    public function __construct() {
        $this->vie = rand(100, 200);
        $this->mana = rand(100, 200);
        $this->chance = rand(0, 10);
        $this->charisme = rand(0, 10);
        $this->intelligence = rand(10, 40);
        $this->attaque = rand(10, 50);
        $this->defense = rand(0, 40);
    }

    public function reconstruct($vie, $mana, $chance, $charisme, $intelligence, $attaque, $defense) {
        $this->vie = $vie;
        $this->mana = $mana;
        $this->chance = $chance;
        $this->charisme = $charisme;
        $this->intelligence = $intelligence;
        $this->attaque = $attaque;
        $this->defense = $defense;
    }

    public function attaqueDeBase(Personnage $victime) {
        $dommage = $this->attaque - $victime->defense;
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
        return "<li>Vie : ".$this->vie."</li>
        <li>Mana : ".$this->mana."</li>
        <li>Attaque : ".$this->attaque."</li>
        <li>Defense : ".$this->defense."</li>";
    }
}