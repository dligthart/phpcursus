<?php

/**
 * Random Chin
 */
class Chin
{
    /**
     * Consttruct a chin
     * 
     * @param $dndrace this race
     */
    private function __construct($dndrace)
    {
        $this->chin = self::_chinShape($dndrace);
    }

    /**
     * Arrays of strings Default Chins
     * 
     * @return concatinated string
     */
    private function _defaultChins()
    {

        $chinshapes = [
            'a rather ', 'quite the', 'a very defined', 'a puffed',
            'a very protruding', 'a bulbous', 'a very small', 'a bit of a',
        ];

        $chincurves = [
            'pointy', 'round', 'square',
        ];

        $chinshape = array_rand(array_flip($chinshapes), 1);
        $chincurve = array_rand(array_flip($chincurves), 1);
        $this->chin = $chinshape . " " . $chincurve . " chin";
    }

    /**
     * Build or choose specific arrray. Select random value string
     * 
     * @param $dndrace this race
     * 
     * @return chin
     */
    private function _chinShape($dndrace)
    {
        if ($dndrace == "Aaracockra") {
            $this->chin = aarakocra::chinReplacer();
        } else if ($dndrace == "") {
            //$nose = new raceClass();
            //$nose = raceClass::randomTHIS();
        } else {
            $this->chin = self::_defaultChins();
        }
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getChin()
    {
        return $this->chin;
    }
}

/*
$chin = new Chin();
$chin = $chin->getChin();
*/