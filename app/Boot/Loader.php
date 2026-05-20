<?php

namespace Body\Boot;

use Body\Route\Router;

class Loader
{
    public static function load()
    {
        global $app;
        self::bootstrapRouting();
    }

    private static function bootstrapRouting()
    {
        new Router();
    }
}