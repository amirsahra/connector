<?php

namespace Tests\unit\helpers\config;

use App\exceptions\ConfigFileNotFoundException;
use App\helpers\Config;

class ExceptionManagementTest extends \PHPUnit\Framework\TestCase
{
    public function testThrowsExceptionGetConfigMethodIfFileNotFound()
    {
        $this->expectException(ConfigFileNotFoundException::class);
        $contentConfigFile = Config::getContentConfigFile('wrong name');
    }
}