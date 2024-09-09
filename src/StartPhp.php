<?php

namespace eagerLearnDeveloper\StartPhp;

class StartPhp
{
    protected $info = [];

    public $startMassage = "Hello World";

    public static function handler(): StartPhp
    {
        return new StartPhp;
    } 


}