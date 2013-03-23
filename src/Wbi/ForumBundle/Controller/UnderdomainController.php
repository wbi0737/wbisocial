<?php

namespace Wbi\ForumBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Wbi\ForumBundle\Entity\Underdomain;
use Wbi\ForumBundle\Form\UnderdomainType;

/**
 * Underdomain controller.
 *
 * @Route("/underdomain")
 */
class UnderdomainController extends Controller
{
    /**
     * Lists all Underdomain entities.
     *
     * @Route("/", name="underdomain")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('WbiForumBundle:Underdomain')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Underdomain entity.
     *
     * @Route("/{id}/show", name="underdomain_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WbiForumBundle:Underdomain')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Underdomain entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Underdomain entity.
     *
     * @Route("/new", name="underdomain_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Underdomain();
        $form   = $this->createForm(new UnderdomainType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Underdomain entity.
     *
     * @Route("/create", name="underdomain_create")
     * @Method("POST")
     * @Template("WbiForumBundle:Underdomain:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Underdomain();
        $form = $this->createForm(new UnderdomainType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('underdomain_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Underdomain entity.
     *
     * @Route("/{id}/edit", name="underdomain_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WbiForumBundle:Underdomain')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Underdomain entity.');
        }

        $editForm = $this->createForm(new UnderdomainType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Underdomain entity.
     *
     * @Route("/{id}/update", name="underdomain_update")
     * @Method("POST")
     * @Template("WbiForumBundle:Underdomain:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WbiForumBundle:Underdomain')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Underdomain entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new UnderdomainType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('underdomain_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Underdomain entity.
     *
     * @Route("/{id}/delete", name="underdomain_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('WbiForumBundle:Underdomain')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Underdomain entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('underdomain'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
