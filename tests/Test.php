<?php

namespace Tests;

include_once dirname(__FILE__) . '/../helpers/myHelpers.php';
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{

    private function limpiarBD(){
        $db = getTestConnection();
        $db->exec('TRUNCATE TABLE users');
        $db->exec('TRUNCATE TABLE diccionari');
    }
    public function testRegister(){
        $this->limpiarBD();
        $this->assertEquals(true,register('juan','1234','1234'));
        $this->assertEquals(false,register('juan','1234','1234'));
        $this->assertEquals(false,register('alex','1234','12345'));
    }
    public function testLogin(){
        $this->limpiarBD();
        register('juan','1234','1234');
        $this->assertEquals(true,login('juan','1234'));
        $this->assertEquals(false,login('igomis','1234'));
    }

    public function testAddWord(){
        $this->limpiarBD();
        $this->assertEquals(true,addWord('hola','hola'));
        $this->assertEquals(false,addWord('hola','adeu'));
    }
    public function testReadWord(){
        $this->limpiarBD();
        addWord('hola','hello');
        $this->assertEquals('hello',getWord('hola'));
        $this->assertEquals(false,getWord('adeu'));
    }
    public function testdelWord(){
        $this->limpiarBD();
        addWord('hola','hello');
        $this->assertEquals('hello',getWord('hola'));
        $this->assertEquals(true,delWord('hola'));
        $this->assertEquals(false,delWord('adeu'));
        $this->assertEquals(false,getWord('hola'));
    }

}
