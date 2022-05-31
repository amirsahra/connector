<?php

namespace Tests\unit\helpers\config;

use App\helpers\Config;
use PHPUnit\Framework\TestCase;

class DataValidationTest extends TestCase
{
    /**
     * @throws \App\exceptions\ConfigFileNotFoundException
     */
    public function testGetContentConfigFileMethodReturnValidKey()
    {
        $result = array_keys(Config::getContentConfigFile('database'));
        $validData = ['connections', 'sqlite', 'mysql'];
        $this->assertEquals($result, $validData);
    }

    /**
     * @throws \App\exceptions\ConfigFileKeyIsNotValidException
     * @throws \App\exceptions\ConfigFileNotFoundException
     */
    public function testGetConfigMethodReturnValidKey()
    {
        $result = array_keys(Config::getConfig('database', 'mysql'));
        $validData = ['driver', 'host', 'port', 'database', 'username', 'password', 'charset',
            'collation', 'prefix', 'prefix_indexes', 'extension'];
        $this->assertEquals($result, $validData);
    }

}