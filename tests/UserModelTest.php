<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\Models\UserModel;


class UserModelTest extends TestCase
{

    public function testUserModelClassExists() //verififa si clase UserMdel Existe
    {
        $this->assertTrue(
            class_exists('Model\UserModel'),
            'La clase UserModel no existe'
        );
    }

    public function testUserModelCanBeInstantiated() //verifica que la instancia es de la clase esperada
    {
        $userModel = new \Model\UserModel();
        $this->assertInstanceOf(
            'Model\UserModel',
            $userModel,
            'No se pudo instanciar la clase UserModel'
        );
    }
}





?>