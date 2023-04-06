<?php

namespace PHP\LevelThree;

class Multiply extends Term {
    public function calc() {
        return $this->childrenLeft->calc() * $this->childrenRight->calc();
    }
}
