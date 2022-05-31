<?php

namespace Tests\unit\helpers\config;

use App\helpers\Config;

class ReturnTypeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @throws \App\exceptions\ConfigFileNotFoundException
     */
    public function testGetContentConfigFileMethodReturnArray()
    {
        $contentConfigFile = Config::getContentConfigFile('database');
        $this->assertIsArray($contentConfigFile);
    }

    public function testGetConfigMethodReturnArray()
    {
        $config = Config::getConfig('database', 'mysql');
        $this->assertIsArray($config);
    }
}