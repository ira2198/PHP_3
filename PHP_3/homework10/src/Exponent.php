<?php

namespace PHP\LevelThree;

class Exponent extends Term {
    public function calc() {
        return pow ($this->childrenLeft->calc(), $this->childrenRight->calc());
    }
}