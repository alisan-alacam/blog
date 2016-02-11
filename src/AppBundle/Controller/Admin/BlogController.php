<?php

namespace AppBundle\Controller\Admin;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use AppBundle\Entity\Post;

/**
 * Blog içerikleri yönetmek için kullanılır
 *
 * @Route("/admin/post")
 * @Security("has_role('ROLE_ADMIN')")
 */
class BlogController extends Controller
{
    /**
     * Tüm makaleleri listeler
     *
     * @Route("/", name="admin_index")
     * @Route("/", name="admin_post_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $posts = $entityManager->getRepository('AppBundle:Post')->findAll();

        return $this->render('admin/blog/index.html.twig', array('posts' => $posts));
    }

    /**
     * Yeni Makale oluşturur
     *
     * @Route("/new", name="admin_post_new")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request)
    {
    }
}