<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Extra;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Extra controller.
 *
 * @Route("extras")
 */
class ExtrasController extends Controller
{
    /**
     * Lists all extra entities.
     *
     * @Route("/", name="extras_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $extras = $em->getRepository('AppBundle:Extras')->findAll();

        return $this->render('extras/index.html.twig', array(
            'extras' => $extras,
        ));
    }

    /**
     * Creates a new extra entity.
     *
     * @Route("/new", name="extras_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $extra = new Extra();
        $form = $this->createForm('AppBundle\Form\ExtrasType', $extra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($extra);
            $em->flush();

            return $this->redirectToRoute('extras_show', array('id' => $extra->getId()));
        }

        return $this->render('extras/new.html.twig', array(
            'extra' => $extra,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a extra entity.
     *
     * @Route("/{id}", name="extras_show")
     * @Method("GET")
     */
    public function showAction(Extra $extra)
    {
        $deleteForm = $this->createDeleteForm($extra);

        return $this->render('extras/show.html.twig', array(
            'extra' => $extra,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing extra entity.
     *
     * @Route("/{id}/edit", name="extras_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Extra $extra)
    {
        $deleteForm = $this->createDeleteForm($extra);
        $editForm = $this->createForm('AppBundle\Form\ExtrasType', $extra);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('extras_edit', array('id' => $extra->getId()));
        }

        return $this->render('extras/edit.html.twig', array(
            'extra' => $extra,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a extra entity.
     *
     * @Route("/{id}", name="extras_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Extra $extra)
    {
        $form = $this->createDeleteForm($extra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($extra);
            $em->flush();
        }

        return $this->redirectToRoute('extras_index');
    }

    /**
     * Creates a form to delete a extra entity.
     *
     * @param Extra $extra The extra entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Extra $extra)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('extras_delete', array('id' => $extra->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
