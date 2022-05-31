<?php

namespace App\helpers;

use App\contracts\ConfigurableInterface;
use App\exceptions\ConfigFileKeyIsNotValidException;
use App\exceptions\ConfigFileNotFoundException;

class Config implements ConfigurableInterface
{
    /**
     * @throws ConfigFileNotFoundException
     */
    public static function getContentConfigFile(string $fileName): array
    {
        $path = realpath(__DIR__ . "/../configs/" . "{$fileName}" . ".php");
        if ($path)
            return require $path;
        throw new ConfigFileNotFoundException();
    }

    public static function getConfig(string $fileName, string $key = null)
    {
        try {
            $contentConfigFile = self::getContentConfigFile($fileName);
            if (is_null($key)) return $contentConfigFile;
            if (self::checkKeyInConfigFile($fileName,$key)){
                return $contentConfigFile[$key];
            }
        } catch (ConfigFileNotFoundException | ConfigFileKeyIsNotValidException $e) {

        }
    }

    /**
     * @throws ConfigFileKeyIsNotValidException
     */
    private static function checkKeyInConfigFile(string $fileName, string $key): bool
    {
        try {
            $contentConfigFile = self::getContentConfigFile($fileName);
            if (!array_key_exists($key, $contentConfigFile))
                throw new ConfigFileKeyIsNotValidException();
            return true;
        } catch (ConfigFileNotFoundException $e) {
            return false;
        }
    }
}