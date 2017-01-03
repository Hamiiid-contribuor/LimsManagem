<?php

namespace Analyses\AnalysesBundle\Controller;

use Analyses\AnalysesBundle\Entity\Analyse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class LimsAController extends Controller {

    public function indexAction() {

        $em = $this->getDoctrine()->getManager();

        $dmds = $em->getRepository('AnalysesBundle:DemandeAnalyse')->findAll();


        return $this
                        ->render("AnalysesBundle:Lims:index.html.twig", array('demandes' => $dmds));
    }

    public function traitementDmDAction($id) {

        $em = $this->getDoctrine()->getEntityManager();

        $dmd = $em->getRepository('AnalysesBundle:DemandeAnalyse')->findOneById($id);
        $analyse = $em->getRepository('AnalysesBundle:Analyse')->findAll();
        $types = $em->getRepository('AnalysesBundle:TypeEchantillon')->findAll();
        $ANECH = $em->getRepository('AnalysesBundle:Echantillonanalyse')->findAll();



        return $this
                        ->render("AnalysesBundle:Lims:traitementDmD.html.twig", array('demande' => $dmd, 'analyses' => $analyse, 'types' => $types, 'AnalysesHas' => $ANECH));
    }

    public function AddEchantillonLAction($id, Request $request) {
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
        foreach ($delete as $Id) {
            $echantillonhasAnalyse = new \Analyses\AnalysesBundle\Entity\Echantillonanalyse();
            $analyse = $em->getRepository('AnalysesBundle:Analyse')->findOneById($Id);
            $echa = $em->getRepository('AnalysesBundle:Echantillon')->findOneById($echantillon->getId());
            $echantillonhasAnalyse->setAnalyse($analyse);
            $echantillonhasAnalyse->setEchantillon($echa);
            $echantillonhasAnalyse->setDate($data['date']);
            $em->persist($echantillonhasAnalyse);
            $em->flush();
        }
        $this->addFlash('message', 'les donnée été validé avec succès');
        return $this->redirectToRoute('traitementDmD', array('id' => $id));
    }

    public function EchantillonItemAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $echantillon = $em->getRepository('AnalysesBundle:Echantillon')->findOneById($id);
        $analyse = $em->getRepository('AnalysesBundle:Test')->findAll();

        $list = $echantillon->getEchantillonItems();


        return $this->render("AnalysesBundle:Lims:EchantillonItem.html.twig", array('echantillon' => $echantillon,
                    'liste' => $list));
    }

    public function addEchantItemAction($id) {

        $em = $this->getDoctrine()->getEntityManager();
        $echantillon = $em->getRepository('AnalysesBundle:Echantillon')->findOneById($id);
        $liste = $em->getRepository('AnalysesBundle:Test')->findAll();

        return $this->render("AnalysesBundle:Lims:addEchantillonItem.html.twig", array('echantillon' => $echantillon, 'liste' => $liste));
    }

    public function addItemAction($id, Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $data = $request->request->all();
        $echantillon = $em->getRepository('AnalysesBundle:Echantillon')->findOneById($id);
        $echantillonitem = new \Analyses\AnalysesBundle\Entity\EchantillonItem();
        $echantillonitem->setReference($data['ref']);
        $echantillonitem->setDate($data['date']);
        $echantillonitem->setCommentaire($data['Description']);
        $echantillonitem->setEchantillon($echantillon);
        $em->persist($echantillonitem);
        $em->flush();

        $delete = $request->get('delete');

        if (is_array($delete)) {
            foreach ($delete as $Id) {
                $echantillonitemhastest = new \Analyses\AnalysesBundle\Entity\Echantillonhastest();
                $test = $em->getRepository('AnalysesBundle:Test')->findOneById($Id);
                $echaitem = $em->getRepository('AnalysesBundle:EchantillonItem')->findOneById($echantillonitem->getId());
                $echantillonitemhastest->setEchantillonItem($echaitem);
                $echantillonitemhastest->setTest($test);

                $em->persist($echantillonitemhastest);
                $em->flush();
            }
        }
        $this->addFlash('message', 'les donnée été validé avec succès');
        return $this->redirectToRoute('EchantillonItem', array('id' => $id));
    }

    function UpdateItemAction($id, Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $data = $request->request->all();
        $echantillonItem = $em->getRepository('AnalysesBundle:EchantillonItem')->findOneById($id);

        $echantillonItem->setDate($data['date']);
        $echantillonItem->setCommentaire($data['Description']);
        $table = $echantillonItem->getEchantillohnHastests();
        $em->flush();

        foreach ($table as $value) {
            $em->remove($value);
            $em->flush();
        }
        $delete = $request->get('delete');

        if (is_array($delete)) {
            foreach ($delete as $Id) {
                $echantillonitemhastest = new \Analyses\AnalysesBundle\Entity\Echantillonhastest();
                $test = $em->getRepository('AnalysesBundle:Test')->findOneById($Id);
                $echantillonitemhastest->setEchantillonItem($echantillonItem);
                $echantillonitemhastest->setTest($test);
                $em->persist($echantillonitemhastest);
                $em->flush();
            }
        }
        $ech = $echantillonItem->getEchantillon();
        $a = $ech->getId();
        $this->addFlash('message', 'les donnée été validé avec succès');
        return $this->redirectToRoute('EchantillonItem', array('id' => $a));
    }

    public function DeleteItemAction($id) {
        $em = $this->getDoctrine()->getEntityManager();
        $echantillonItem = $em->getRepository('AnalysesBundle:EchantillonItem')->findOneById($id);
        $table = $echantillonItem->getEchantillohnHastests();
        foreach ($table as $value) {
            $res = $value->getResultat();
            $value->setResultat(null);
            $em->remove($res);
            $em->flush();
            $em->remove($value);
            $em->flush();
        }
        $ech = $echantillonItem->getEchantillon();
        $a = $ech->getId();

        $em->remove($echantillonItem);
        $em->flush();
        return $this->redirectToRoute('EchantillonItem', array('id' => $a));
    }

}
