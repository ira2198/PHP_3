<?php

interface ISquare
{
    function squareArea(int $sideSquare);
}
interface ICircle
{
    function circleArea(int $circumference);
}


class SquareAreaLib
{
    public function getSquareArea(int $diagonal)
    {
        $area = ($diagonal**2)/2;
        return $area;
    }
}

class CircleAreaLib 
{
    public function getCircleArea(int $diagonal)
    {
        $area = (M_PI * $diagonal**2)/4;
        return $area;
    }
}


class SquareAreaAdapter implements ISquare
{
    protected $library;

    public function __construct()
    {
        $this->library = new SquareAreaLib();  
    }
    public function squareArea(int $sideSquare)
    {
        $this->library->getSquareArea(floor($sideSquare * sqrt(2)));
    }
}

class CircleAreaAdapter implements ICircle
{
    protected $library;

    public function __construct()
    {
        $this->library = new CircleAreaLib();  
    }
    public function circleArea(int $circumference)
    {
        $this->library->getCircleArea(floor($circumference / M_PI));
    }
}
