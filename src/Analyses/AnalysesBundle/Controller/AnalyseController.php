<?php

namespace Analyses\AnalysesBundle\Controller;

use Analyses\AnalysesBundle\Entity\Analyse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Analyse controller.
 *
 * @Route("analyse")
 */
class AnalyseController extends Controller
{
    /**
     * Lists all analyse entities.
     *
     * @Route("/", name="analyse_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $analyses = $em->getRepository('AnalysesBundle:Analyse')->findAll();

        return $this->render('analyse/index.html.twig', array(
            'analyses' => $analyses,
        ));
    }
    
     public function deleteAnalyseAction(Analyse $analyse) {

        $em = $this->getDoctrine()->getManager();
        $em->remove($analyse);
        $em->flush($analyse);

        return $this->redirectToRoute('analyse_new');
    }


    /**
     * Creates a new analyse entity.
     *
     * @Route("/new", name="analyse_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $analyse = new Analyse();
        $form = $this->createForm('Analyses\AnalysesBundle\Form\AnalyseType', $analyse);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($analyse);
            $em->flush($analyse);
        }
        $analyses = $em->getRepository('AnalysesBundle:Analyse')->findAll();
        return $this->render('analyse/new.html.twig', array(
                    'analyse' => $analyse,
                    'form' => $form->createView(),
                    'analyses' => $analyses,
        ));
    }

    /**
     * Finds and displays a analyse entity.
     *
     * @Route("/{id}", name="analyse_show")
     * @Method("GET")
     */
    public function showAction(Analyse $analyse)
    {
        $deleteForm = $this->createDeleteForm($analyse);

        return $this->render('analyse/show.html.twig', array(
            'analyse' => $analyse,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing analyse entity.
     *
     * @Route("/{id}/edit", name="analyse_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Analyse $analyse)
    {
        $deleteForm = $this->createDeleteForm($analyse);
        $editForm = $this->createForm('Analyses\AnalysesBundle\Form\AnalyseType', $analyse);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('analyse_edit', array('id' => $analyse->getId()));
        }

        return $this->render('analyse/edit.html.twig', array(
            'analyse' => $analyse,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a analyse entity.
     *
     * @Route("/{id}", name="analyse_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Analyse $analyse)
    {
        $form = $this->createDeleteForm($analyse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($analyse);
            $em->flush($analyse);
        }

        return $this->redirectToRoute('analyse_index');
    }

    /**
     * Creates a form to delete a analyse entity.
     *
     * @param Analyse $analyse The analyse entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Analyse $analyse)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('analyse_delete', array('id' => $analyse->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
