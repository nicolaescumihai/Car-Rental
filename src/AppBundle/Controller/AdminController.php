<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Route("/admin")
 * @Security("has_role('ROLE_ADMIN')")
 */
class AdminController extends Controller
{
    /**
     * @Route("/showAllOrders", name="comenzi")
     */
    public function showAllOrdersAction()
    {
        $em = $this->getDoctrine()->getManager();

        $orders = $em->getRepository('AppBundle:Order')->findAll();

        return $this->render('@App/Admin/show_all_orders.html.twig', array(
            'orders' => $orders,
        ));
    }

    /**
     * @Route("/showAllUsers")
     */
    public function showAllUsersAction()
    {
        $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();

        return $this->render('@App/Admin/show_all_users.html.twig', array('users' =>   $users));
    }

}
