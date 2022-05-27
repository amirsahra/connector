<?php

namespace App\contracts;

interface ConfigurableInterface
{
    public static function getContentConfigFile(string $fileName);

    public static function getConfig(string $fileName, string $key = null);
}