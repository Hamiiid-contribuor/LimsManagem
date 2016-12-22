<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Utilisateur\UtilisateurBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;



/**
 * Description of UtilisateurController
 *
 * @author hamid
 */
class UtilisateurController extends Controller {

//put your code here


    public function listUserAction() {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('UtilisateurBundle:Utilisateur')->findAll();

        return $this->render('UtilisateurBundle:Utilisateur:list.html.twig', array(
                    'users' => $users
        ));
    }

    public function detailUserAction($id) {


        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UtilisateurBundle:Utilisateur')->find($id);


        return $this->render('UtilisateurBundle:Utilisateur:detailUser.html.twig', array(
                    'user' => $user
        ));
    }

}
