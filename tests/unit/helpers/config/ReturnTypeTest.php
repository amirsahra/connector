<?php

namespace Tests\unit\helpers\config;

use App\helpers\Config;
use PHPUnit\Framework\TestCase;

class ReturnTypeTest extends TestCase
{
    /**
     * @throws \App\exceptions\ConfigFileNotFoundException
     */
    public function testGetContentConfigFileMethodReturnArray()
    {
        $contentConfigFile = Config::getContentConfigFile('database');
        $this->assertIsArray($contentConfigFile);
    }

    /**
     * @throws \App\exceptions\ConfigFileKeyIsNotValidException
     * @throws \App\exceptions\ConfigFileNotFoundException
     */
    public function testGetConfigMethodReturnArray()
    {
        $config = Config::getConfig('database', 'mysql');
        $this->assertIsArray($config);
    }
}