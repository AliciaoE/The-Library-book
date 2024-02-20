<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use src\model\UserModel;


class UserModelTest extends TestCase
{

    public function testUserModelClassExists() //verififa si clase UserMdel Existe
    {
        $this->assertTrue(
            class_exists('Model\UserModel'),
            'La clase UserModel no existe'
        );
    }
}





?>