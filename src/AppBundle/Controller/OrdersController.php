<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Car;
use AppBundle\Entity\Extra;
use AppBundle\Entity\Order;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Order controller.
 *
 * @Route("orders")
 */
class OrdersController extends Controller
{
    /**
     * Lists all order entities.
     *
     * @Route("/", name="orders_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $orders = $em->getRepository('AppBundle:Order')->findAll();

        return $this->render('orders/index.html.twig', array(
            'orders' => $orders,
        ));
    }

    /**
     * Creates a new order entity.
     *
     * @Route("/new/{carId}", name="orders_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request,$carId)
    {
        $order = new Order();
        $em = $this->getDoctrine()->getManager();
        $car = $em->getRepository(Car::class)->findOneById($carId);
        $order->addCars($car);
        $order->setPrice(100);
        $em->persist($order);
        $em->flush();

        return $this->redirectToRoute('orders_show', array('id' => $order->getId()));

    }


    /**
     * Creates a new order entity.
     *
     * @Route("/new/{orderId}/{extraId}", name="orders_new2")
     * @Method({"GET", "POST"})
     */
    public function newAction2(Request $request,$orderId,$extraId)
    {

        $em = $this->getDoctrine()->getManager();
        $order = $em->getRepository(Order::class)->findOneById($orderId);
        $extra = $em->getRepository(Extra::class)->findOneById($extraId);
        $order->addExtra($extra);
        $em->persist($order);
        $em->persist($extra);
        $em->flush();

        return $this->redirectToRoute('orders_show', array('id' => $order->getId()));

    }

    /**
     *@Route("/finish/{orderId}")
     * @Security("has_role('ROLE_USER')")
     */
    public function finishPay($orderId,Request $request )
    {
        $em = $this->getDoctrine()->getManager();
        $order = $em->getRepository(Order::class)->findOneById($orderId);
        $totalprice = 0;
        $cars = $order->getCars();
        foreach($cars as $car){
            $totalprice += $car->getPrice();
        }
        $extras= $order->getExtras();
        foreach ($extras as $extra){
            $totalprice += $extra->getPrice();
        }

        $order->setPrice($totalprice);

        return $this->render('orders/CompleteOrder.html.twig', array(
        'orders' => $order,'totalPrice'=>$totalprice
    ));
    }

    /**
     * Finds and displays a order entity.
     *
     * @Route("/{id}", name="orders_show")
     * @Method("GET")
     */
    public function showAction(Order $order)
    {
        $deleteForm = $this->createDeleteForm($order);
        $em = $this->getDoctrine()->getManager();

        $extras = $em->getRepository(Extra::class)->findAll();

        return $this->render('orders/show.html.twig', array(
            'extras' => $extras,
            'order'=> $order,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing order entity.
     *
     * @Route("/{id}/edit", name="orders_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Order $order)
    {
        $deleteForm = $this->createDeleteForm($order);
        $editForm = $this->createForm('AppBundle\Form\OrdersType', $order);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('orders_edit', array('id' => $order->getId()));
        }

        return $this->render('orders/edit.html.twig', array(
            'order' => $order,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a order entity.
     *
     * @Route("/{id}", name="orders_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Order $order)
    {
        $form = $this->createDeleteForm($order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($order);
            $em->flush();
        }

        return $this->redirectToRoute('orders_index');
    }

    /**
     * Creates a form to delete a order entity.
     *
     * @param Orders $order The order entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Order $order)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('orders_delete', array('id' => $order->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
