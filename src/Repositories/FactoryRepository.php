<?php

namespace Repositories;

class FactoryRepository
{
    const PATH = '\Repositories\\';

    const SLUG = 'Repository';

    public static function make($repository)
    {
        $class = Self::PATH . ucfirst($repository) . Self::SLUG;

        return new $class();
    }
}