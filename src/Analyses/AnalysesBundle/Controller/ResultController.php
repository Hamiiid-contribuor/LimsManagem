<?php

namespace Analyses\AnalysesBundle\Controller;

use Analyses\AnalysesBundle\Entity\Analyse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ResultController extends Controller {

    public function AffecterResultAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $data = $request->request->all();
        unset($data['submit']);
        $date = new \DateTime('now');
        foreach ($data as $key => $value) {
            if (is_int($key)) {
                $id = $key;
                $valeur = $data["value$id"];
                $comment = $data["comment$id"];

                $Echantillonhastest = $em->getRepository("AnalysesBundle:Echantillonhastest")->findOneById($id);
                if ($Echantillonhastest->getResultat() == null) {
                    $result = new \Analyses\AnalysesBundle\Entity\Resultat();
                    $result->setDate($date);
                    $result->setCommentaire($comment);
                    $result->setValue($valeur);
                    $result->setEchantillonhastest($Echantillonhastest);
                    $em->persist($result);
                    $Echantillonhastest->setResultat($result);
                    $em->flush();
                } else {
                    $a = $Echantillonhastest->getResultat();
                    $a->setDate($date);
                    $a->setCommentaire($comment);
                    $a->setValue($valeur);
                    $em->flush();
                }
            }
        }
        $em->flush();

        $E = $em->getRepository("AnalysesBundle:Echantillon")->findOneById($data['echaID']);
        $a = $E->getId();

        return $this->redirectToRoute('EchantillonItem', array('id' => $a));
    }

    public function ResultaIndexAction($id) {
        $em = $this->getDoctrine()->getManager();
        $dmd = $em->getRepository("AnalysesBundle:DemandeAnalyse")->findOneById($id);

        return $this->render("AnalysesBundle:Lims:Resultat.html.twig", array('demande' => $dmd));
    }

    public function imprimerResultaIndexAction($id) {
        $em = $this->getDoctrine()->getManager();
        $dmd = $em->getRepository("AnalysesBundle:DemandeAnalyse")->findOneById($id);
        $html = $this->renderView('AnalysesBundle:Lims:ResultatPrint.html.twig', array('demande' => $dmd));
        $html2pdf = new \Html2Pdf_Html2Pdf('P', 'A4', 'fr');
        $html2pdf->pdf->SetDisplayMode('real');
        $html2pdf->writeHTML($html);
        return new Response($html2pdf->Output("Recap.pdf"), 200, array('Content-Type' => 'application/pdf'));


    }
    public function ValiderDemandeAction($id){
        $em = $this->getDoctrine()->getManager();
        $dmd = $em->getRepository("AnalysesBundle:DemandeAnalyse")->findOneById($id);
        
    }

}
