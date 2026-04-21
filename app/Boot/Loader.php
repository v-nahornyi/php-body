<?php

namespace Body\Boot;

class Loader
{
    public static function load()
    {
        global $start;
        $end = microtime(true) - $start;
        echo "loaded in $end seconds";
    }
}