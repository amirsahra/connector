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

    /*public function testGetConfigMethodReturnValidData()
    {

    }

    public function testReceivedGetConfigMethodHaveRequiredKey()
    {

    }*/
}