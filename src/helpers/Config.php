<?php

namespace App\helpers;

use App\contracts\ConfigurableInterface;
use PhpParser\Node\Expr\Throw_;

class Config implements ConfigurableInterface
{
    public static function getContentConfigFile(string $fileName)
    {
        /*$path = realpath(__DIR__ . "/../configs/" . "{$fileName}" . ".php");
        if ($path)
            throw new ConfigFileNotFoundException();
        return require_once $path;*/
    }

    public static function getConfig(string $fileName, string $key = null)
    {
        // TODO: Implement getConfig() method.
    }
}