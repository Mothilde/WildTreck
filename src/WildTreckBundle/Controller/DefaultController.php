<?php

namespace WildTreckBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WildTreckBundle:Default:index.html.twig');
    }

    public function activiteAction()
    {
        return $this->render('WildTreckBundle:Default:activite.html.twig');
    }

    public function sportAction()
    {
        return $this->render('WildTreckBundle:Default:sport.html.twig');
    }

    /**
     * Creates a new sport entity.
     *
     */
    public function newAction(Request $request)
    {
        $nouveausport = new nouveausport();
        $form = $this->createForm('WildTreckBundle\Form\nouveausportType', $nouveausport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($nouveausport);
            $em->flush();

            return $this->redirectToRoute('nouveausport_show', array('id' => $nouveausport->getId()));
        }

        return $this->render('nouveausport/new.html.twig', array(
            'nouveausport' => $nouveausport,
            'form' => $form->createView(),
        ));
    }
}

