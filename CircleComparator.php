<?php
include "Circle.php";
include "Comparator.php";

class CircleComparator
{
    public function compare($circleOne, $circleTwo)
    {
        $radiusOne = $circleOne->getRadius();
        $radiusTwo = $circleTwo->getRadius();

        if ($radiusOne > $radiusTwo) {
            return 1;
        }  else if($radiusOne < $radiusTwo) {
            return -1;
        } else {
            return 0;
        }
    }
}