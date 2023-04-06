<?php

namespace PHP\LevelThree;

class Minus extends Term {
    public function calc() {
        return $this->childrenLeft->calc() - $this->childrenRight->calc();
    }
}