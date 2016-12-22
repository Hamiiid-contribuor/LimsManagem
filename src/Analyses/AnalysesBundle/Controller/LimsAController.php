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
    $analyse = $em->getRepository('AnalysesBundle:Analyse')->findAll();
    $types = $em->getRepository('AnalysesBundle:TypeEchantillon')->findAll();
    $ANECH = $em->getRepository('AnalysesBundle:Echantillonanalyse')->findAll();
    
    
    
     return $this
            ->render("AnalysesBundle:Lims:traitementDmD.html.twig",
            array('demande'=>$dmd, 'analyses'=>$analyse, 'types'=>$types, 'AnalysesHas'=>$ANECH));
        
        
    }
    
        public function AddEchantillonLAction($id,Request $request){
         $em = $this->getDoctrine()->getEntityManager();
        $data = $request->request->all();
        $dmd = $em->getRepository('AnalysesBundle:DemandeAnalyse')->findOneById($id);
        $type = $em->getRepository('AnalysesBundle:TypeEchantillon')->findOneById($data['forme']);
        
        $echantillon = new \Analyses\AnalysesBundle\Entity\Echantillon();
        $echantillon->setReference($data['ref']);
        $echantillon->setTypeEchantillon($type);
        $echantillon->setDate($data['date']);
        $echantillon->setDemandeAnalyse($dmd);
        $echantillon->setCommentaire($data['Description']);
      
        $em->persist($echantillon);
        $em->flush();
        
        $delete = $request->get('delete');
        foreach($delete  as $Id) {
           $echantillonhasAnalyse = new \Analyses\AnalysesBundle\Entity\Echantillonanalyse();
           $analyse = $em->getRepository('AnalysesBundle:Analyse')->findOneById($Id);
           $echa = $em->getRepository('AnalysesBundle:Echantillon')->findOneById($echantillon->getId());
           $echantillonhasAnalyse->setAnalyse($analyse);
           $echantillonhasAnalyse->setEchantillon($echa);
           $echantillonhasAnalyse->setDate($data['date']);
           $em->persist($echantillonhasAnalyse);
           $em->flush();
     }
         $this->addFlash('message','les donnée été validé avec succès');
         return $this->redirectToRoute('traitementDmD',array('id'=>$id));
        
   
    }
    
    public function EchantillonItemAction($id){
     $em = $this->getDoctrine()->getEntityManager();
     
    $echantillon = $em->getRepository('AnalysesBundle:Echantillon')->findOneById($id);
    $analyse = $em->getRepository('AnalysesBundle:Test')->findAll();
   
    $list = $echantillon->getEchantillonItems();
    
    
     return $this
            ->render("AnalysesBundle:Lims:EchantillonItem.html.twig",
            array('echantillon'=>$echantillon,'liste'=>$list));
        
    }

    
   
}




