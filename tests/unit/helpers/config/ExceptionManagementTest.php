<?php

namespace Tests\unit\helpers\config;

use App\exceptions\ConfigFileKeyIsNotValidException;
use App\exceptions\ConfigFileNotFoundException;
use App\helpers\Config;
use PHPUnit\Framework\TestCase;

class ExceptionManagementTest extends TestCase
{
    /**
     * @throws ConfigFileNotFoundException
     */
    public function testThrowsExceptionGetConfigFileMethodIfFileNotFound()
    {
        $this->expectException(ConfigFileNotFoundException::class);
        $contentConfigFile = Config::getContentConfigFile('wrong name');
    }

    /**
     * @throws ConfigFileKeyIsNotValidException
     * @throws ConfigFileNotFoundException
     */
    public function testThrowsExceptionGetConfigMethodIfFileNotFound()
    {
        $this->expectException(ConfigFileNotFoundException::class);
        $contentConfigFile = Config::getConfig('wrong name','mysql');
    }

    /**
     * @throws ConfigFileNotFoundException
     */
    public function testThrowsExceptionGetConfigMethodIfKeyIsNotValid()
    {
        $this->expectException(ConfigFileKeyIsNotValidException::class);
        $config = Config::getConfig('database','wrong key');
    }

}