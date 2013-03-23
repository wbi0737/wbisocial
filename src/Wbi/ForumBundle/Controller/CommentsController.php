<?php

namespace Wbi\ForumBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Wbi\ForumBundle\Entity\Comments;
use Wbi\ForumBundle\Form\CommentsType;
use Symfony\Component\HttpFoundation\Response;


/**
 * Comments controller.
 *
 * @Route("/comments")
 */
class CommentsController extends Controller
{
    /**
     * Lists all Comments entities.
     *
     * @Route("/", name="comments")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('WbiForumBundle:Comments')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Comments entity.
     *
     * @Route("/{id}/show", name="comments_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WbiForumBundle:Comments')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comments entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Comments entity.
     *
     * @Route("/new", name="comments_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Comments();
        $form   = $this->createForm(new CommentsType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Comments entity.
     *
     * @Route("/create", name="comments_create")

     * @Template("WbiForumBundle:Comments:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $commentContent = $request->get("comment");
        $post_id = $request->get("post_id");
        $user_id = $request->get("user_id");
        $entity  = new Comments();
        $entity->setCommentContent($commentContent);
        $post = $this->getDoctrine()->getRepository("WbiForumBundle:Posts")->find($post_id);
        $user = $this->getDoctrine()->getRepository("WbiUserBundle:User")->find($user_id);
             $entity->setPosts($post);
             $entity->setUser($user);
        
         
            $em->persist($entity);
            $em->flush();

           
        
        $response = new Response(json_encode(array('comment' => $entity->getCommentContent(), 'username' => $entity->getUser()->getUsername(), 'commentDate' => $entity->getCommentDate()->format('Y-m-d H:i:s'))));
        $response->headers->set('Content-Type', 'application/json');

        return $response;

    }

    /**
     * Displays a form to edit an existing Comments entity.
     *
     * @Route("/{id}/edit", name="comments_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WbiForumBundle:Comments')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comments entity.');
        }

        $editForm = $this->createForm(new CommentsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Comments entity.
     *
     * @Route("/{id}/update", name="comments_update")
     * @Method("POST")
     * @Template("WbiForumBundle:Comments:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WbiForumBundle:Comments')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comments entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CommentsType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('comments_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Comments entity.
     *
     * @Route("/{id}/delete", name="comments_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('WbiForumBundle:Comments')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Comments entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('comments'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
