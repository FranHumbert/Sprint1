<?php

use PHPUnit\Framework\TestCase;
require_once 'Alumnos.php';

final class testAlumnos extends TestCase{

    public function testPrimeraDivisio(){
        $this->assertEquals("Primera divisio", verificarGrau(60));
        $this->assertEquals("Primera divisio", verificarGrau(80));
        $this->assertEquals("Primera divisio", verificarGrau(100));
    }

    public function testSegonaDivisio(){
        $this->assertEquals("Segona divisio", verificrGrau(45));
        $this->assertEquals("Segona divisio", verificrGrau(50));
        $this->assertEquals("Segona divisio", verificrGrau(59));
    }

    public function testTerceraDivisio(){
        $this->assertEquals("Tercera divisio", verificrGrau(33));
        $this->assertEquals("Tercera divisio", verificrGrau(40));
        $this->assertEquals("Tercera divisio", verificrGrau(44));
    }

    public function testReprovat(){
        $this->assertEquals("Reprovat", verificrGrau(32));
        $this->assertEquals("Reprovat", verificrGrau(15));
        $this->assertEquals("Reprovat", verificrGrau(0));
    }

}


?>