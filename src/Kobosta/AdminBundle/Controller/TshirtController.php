<?php

namespace Kobosta\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Kobosta\SiteBundle\Entity\Tshirt;
use Kobosta\SiteBundle\Form\TshirtType;

/**
 * Tshirt controller.
 *
 */
class TshirtController extends Controller
{
    /**
     * Lists all Tshirt entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('KobostaSiteBundle:Tshirt')->findAll();

        return $this->render('KobostaAdminBundle:Tshirt:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Tshirt entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('KobostaSiteBundle:Tshirt')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tshirt entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KobostaAdminBundle:Tshirt:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Tshirt entity.
     *
     */
    public function newAction()
    {
        $entity = new Tshirt();
        $form   = $this->createForm(new TshirtType(), $entity);

        return $this->render('KobostaAdminBundle:Tshirt:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Tshirt entity.
     *
     */
    public function createAction()
    {
        $entity  = new Tshirt();
        $request = $this->getRequest();
        $form    = $this->createForm(new TshirtType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity->setLastupdate(new \DateTime());
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_tshirt_show', array('id' => $entity->getId())));
            
        }

        return $this->render('KobostaAdminBundle:Tshirt:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Tshirt entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('KobostaSiteBundle:Tshirt')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tshirt entity.');
        }

        $editForm = $this->createForm(new TshirtType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KobostaAdminBundle:Tshirt:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Tshirt entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('KobostaSiteBundle:Tshirt')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tshirt entity.');
        }

        $editForm   = $this->createForm(new TshirtType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $entity->setLastupdate(new \DateTime());
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_tshirt_edit', array('id' => $id)));
        }

        return $this->render('KobostaAdminBundle:Tshirt:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Tshirt entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('KobostaSiteBundle:Tshirt')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tshirt entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_tshirt'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
