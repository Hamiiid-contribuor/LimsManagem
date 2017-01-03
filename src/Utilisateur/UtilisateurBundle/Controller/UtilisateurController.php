<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Utilisateur\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateur\UtilisateurBundle\Entity\Utilisateur;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of UtilisateurController
 *
 * @author hamid
 */
class UtilisateurController extends Controller {

//put your code here


    public function activateUserAction($id) {

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UtilisateurBundle:Utilisateur')->find($id);
        $user->setEnabled(true);
        $em->flush($user);

        return $this->redirectToRoute('list_of_user');
    }
     public function disactivateUserAction($id) {

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UtilisateurBundle:Utilisateur')->find($id);
        $user->setEnabled(false);
        $em->flush($user);

        return $this->redirectToRoute('list_of_user');
    }

    public function deleteUserAction(Utilisateur $utilisateur) {

        $em = $this->getDoctrine()->getManager();
        $em->remove($utilisateur);
        $em->flush($utilisateur);

        return $this->redirectToRoute('list_of_user');
    }

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
