<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Car;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $cars1 = $em->getRepository(Car::class)->findByRented(false);

        $cars2 = $em->getRepository(Car::class)->findByRented(true);

        return $this->render('car/index.html.twig', array(
            'cars' => $cars1,'cars2'=>$cars2
        ));
    }

//    /**
//     * @Route("/restricted")
//     * @Security("has_role('ROLE_ADMIN')")
//     */
//    public function restrictedAction()
//    {
//        return new Response ('sa creat');
//    }
}
