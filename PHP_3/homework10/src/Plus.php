<?php

namespace PHP\LevelThree;

class Plus extends Term {
    public function calc() {
        return $this->childrenLeft->calc() + $this->childrenRight->calc();
    }
}