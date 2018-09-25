<?php

namespace Models;

class FactoryModel
{
    const PATH = '\Models\\';

    public static function make($model)
    {
        $class = Self::PATH . ucfirst($model);

        return new $class();
    }
}