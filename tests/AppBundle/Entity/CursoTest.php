<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CursoTest
 *
 * @author Gabriel
 */

namespace Tests\AppBundle\Model;

use AppBundle\Entity\Curso;
use PHPUnit\Framework\TestCase;


class CursoTest extends TestCase{

   private $aluno;
    
   public function testCursoPossuiDados(){
       $curso = new Curso("TECNOLOGIA EM ANÁLISE E DESENVOLVIMENTO DE SISTEMAS");
       $this->assertEquals("TECNOLOGIA EM ANÁLISE E DESENVOLVIMENTO DE SISTEMAS", $curso->getNome());
        
   }
   
   public function testCursoPossuiAlunos(){
       $curso = new Curso("TECNOLOGIA EM ANÁLISE E DESENVOLVIMENTO DE SISTEMAS");
       $curso->adicionarAluno($this->aluno);
       $this->assertEquals("TECNOLOGIA EM ANÁLISE E DESENVOLVIMENTO DE SISTEMAS", $curso->getNome());
       $this->assertNotNull($curso->getAlunos());
   }
   
   
   
}
