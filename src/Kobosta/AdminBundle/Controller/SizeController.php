<?php

namespace Kobosta\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Kobosta\SiteBundle\Entity\Size;
use Kobosta\SiteBundle\Form\SizeType;

/**
 * Size controller.
 *
 */
class SizeController extends Controller
{
    /**
     * Lists all Size entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('KobostaSiteBundle:Size')->findAll();

        return $this->render('KobostaAdminBundle:Size:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Size entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('KobostaSiteBundle:Size')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Size entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KobostaAdminBundle:Size:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Size entity.
     *
     */
    public function newAction()
    {
        $entity = new Size();
        $form   = $this->createForm(new SizeType(), $entity);

        return $this->render('KobostaAdminBundle:Size:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Size entity.
     *
     */
    public function createAction()
    {
        $entity  = new Size();
        $request = $this->getRequest();
        $form    = $this->createForm(new SizeType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_size_show', array('id' => $entity->getId())));
            
        }

        return $this->render('KobostaAdminBundle:Size:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Size entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('KobostaSiteBundle:Size')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Size entity.');
        }

        $editForm = $this->createForm(new SizeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KobostaAdminBundle:Size:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Size entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('KobostaSiteBundle:Size')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Size entity.');
        }

        $editForm   = $this->createForm(new SizeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_size_edit', array('id' => $id)));
        }

        return $this->render('KobostaAdminBundle:Size:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Size entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('KobostaSiteBundle:Size')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Size entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_size'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
