<?php

namespace Utilisateur\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller {

    /**
     * @Route("/")
     */
    public function indexAction() {
        return $this->render('UtilisateurBundle:Default:index.html.twig');
    }

    
    /**
     * @Route("/testMailer/")
     */
    public function TestMailerAction() {
       
        $msg ='<html> <h1> this is my first test with the Mailer Bundle :) , bon reception</h1> </html>';
        $message = \Swift_Message::newInstance()
                ->setSubject('Hello Email')
                ->setFrom('lidrissihamid@gmail.com')
                ->setTo('hamidbusinesschannel@gmail.com')
                ->setBody($msg , 'text/html' );
                 
        $this->get('mailer')->send($message);

        return $this->render('UtilisateurBundle:Default:index.html.twig');
    }
    
    

}
