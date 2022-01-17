<?php

class Avengers {
    private string $name;
    private string $particularity;
    private int $hp;

    protected function __construct(string $name = "", string $particularity = "", int $hp){
        $this->name = $name;
        $this->particularity = $particularity;
        $this->hp = $hp;
    }

    public function attack() {
        if ($this->hp > 0) {
            $this->hp += 20;
        } else {
            echo "Le héros ne peur pas attaquer";
        }
    }

    public function defense() {
        if ($this->hp > 10) {
            $this->hp -= 10;
        } else {
            "Le héros est mort";
        }
    }

    public function infos() {
        return $this->name . " est un " . $this->particularity . " qui a " . $this->hp . " points de vie au départ.";
    }
}