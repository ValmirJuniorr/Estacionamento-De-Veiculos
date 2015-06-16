<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

/**
 * Description of seleneseTest
 *
 * @author Valmir
 */
class seleneseTest extends PHPUnit_Extensions_SeleniumTestCase {

    function setUp() {
        $this->setBrowser("*chrome");
        $this->setBrowserUrl("http://localhost/ParkingManagerment");
    }

    function testMyTestCase() {
        $this->open("http://localhost/ParkingManagerment/index.php");
        $this->waitForPageToLoad();
        $this->assertEquals('Mananger Park Val', $this->getTitle());
    }
    
    //login do Administrador
    public function testLogin() {
        $this->open('http://localhost/ParkingManagerment/index.php');

        $user = 'admin';
        $pass = 'admin';
        $login = $this->type('css=input#login', $user);
        $senha = $this->type('css=input#senha', $pass);
        $entrar = $this->click('css=input#entrar.entrar');
        $this->waitForPageToLoad();
        $this->assertContains(($this->getText('css=h1.titulo')), 'Relatórios');
    }
    
    //login do Empregado
    public function testLoginEmpregado() {
        $this->open('http://localhost/ParkingManagerment/index.php');

        $user = 'Valmir';
        $pass = '123';
        $login = $this->type('css=input#login', $user);
        $senha = $this->type('css=input#senha', $pass);
        $entrar = $this->click('css=input#entrar.entrar');
        $this->waitForPageToLoad();
        $this->assertContains(($this->getText('css=h2.titulo')), 'Vagas');
    }
    

    /* public function testSubmitToSelf()
      {
      // set the url
      $this->url( 'contact' );

  
     *     // create a form object for reuse
      $form = $this->byId( 'contact_form' );

      // get the form action
      $action = $form->attribute( 'action' );

      // check the action value
      $this->assertEquals( 'http://www.phpro.org/contact', $action );
      // fill in the form field values
      $this->byName( 'sender_name' )->value( 'Kevin Waterson' );
      $this->byName( 'sender_email' )->value( 'kevin@example.com' );
      $this->byName( 'sender_message' )->value( 'A new message' );

      // submit the form
      $form->submit();
      } */
}

?>