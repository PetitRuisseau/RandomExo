<?php
class MJ {
    protected $tour;
    protected $action;

    public function __construct($action, $tour = 2) {
        if ($tour == 1) {
            $tour = 2;
        } elseif ($tour == 2) {
            $tour = 1;
        } else {
            $tour = 1;
        }
        $this->tour = $tour;
        $this->action = $action;
    }

    public function action(Personnage $genti, Personnage $mechant) {
        if ($this->action == "attaqueSpecial") {
            if ($this->tour == 1) {
                $genti->attaqueSpecial($mechant);
            } elseif ($this->tour == 2) {
                $mechant->attaqueSpecial($genti);
            }
        }

        if ($this->action == "attaqueDeBase") {
            if ($this->tour == 1) {
                $genti->attaqueDeBase($mechant);
            } elseif ($this->tour == 2) {
                $mechant->attaqueDeBase($genti);
            }
        }
    }
}