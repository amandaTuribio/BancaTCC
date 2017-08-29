<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\BrowserKit\Request;
use AppBundle\DAO\AlunoDAO;

class AlunoController extends Controller{
    
    public $aluno;
     
    /**
     * @Route("/aluno/store")
     */
    public function store(Request $request){   
        $em = $this->getDoctrine()->getManager();
        
        $prontuario = $request->query->get('prontuario');
        $nome = $request->query->get('nome');
        $email = $request->query->get('email');
        $curso = $request->query->get('curso');
        
        $this->aluno = new Aluno($prontuario, $nome, $email, $curso);
        
        $dao = new AlunoDAO($em);
        $dao->inserir($aluno);
    }
    
   
    
    /**
     * @Route("/aluno/cadastro")
     */
    public function cadastro(){
        return  $this->render('aluno/cadastro.html.twig');
    }
    
    /**
     * @Route("/aluno/find")
     */
    public function find(){
        return  $this->render('aluno/find.html.twig');
    }
    
    /**
     * @Route("/aluno/delete")
     */
    public function delete(){
        return  $this->render('aluno/delete.html.twig');
    }
    
    
    /**
     * @Route("/aluno/update")
     */
    public function update(){
        return  $this->render('aluno/update.html.twig');
    }
    
    
    /**
     * @Route("/aluno/show")
     */
    public function show(){
        return  $this->render('aluno/show.html.twig');
    }
    
    /**
     * @Route("/aluno/listAll")
     */
    public function listAll(){
        return  $this->render('aluno/listAll.html.twig');
    }
}
