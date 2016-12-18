<?php

namespace Analyses\AnalysesBundle\Controller;

use Analyses\AnalysesBundle\Entity\Analyse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class LimsAController extends Controller
{
   
    public function indexAction()
    {
        
        $em = $this->getDoctrine()->getManager();

        $dmds = $em->getRepository('AnalysesBundle:DemandeAnalyse')->findAll();
       

       return $this
            ->render("AnalysesBundle:Lims:index.html.twig",
            array('demandes'=>$dmds));
    }
    
    public function traitementDmDAction($id){
        
           $em = $this->getDoctrine()->getEntityManager();

    $dmd = $em->getRepository('AnalysesBundle:DemandeAnalyse')->findOneById($id);
    
     return $this
            ->render("AnalysesBundle:Lims:traitementDmD.html.twig",
            array('demande'=>$dmd));
        
        
    }

    
   
}




