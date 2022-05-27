<?php

namespace App\helpers;

use App\contracts\ConfigurableInterface;
use App\exceptions\ConfigFileNotFoundException;

class Config implements ConfigurableInterface
{
    /**
     * @throws ConfigFileNotFoundException
     */
    public static function getContentConfigFile(string $fileName) : array
    {
        $path = realpath(__DIR__ . "/../configs/" . "{$fileName}" . ".php");
        if ($path)
            return require_once $path;
        throw new ConfigFileNotFoundException();
    }

    public static function getConfig(string $fileName, string $key = null)
    {
        // TODO: Implement getConfig() method.
    }
}