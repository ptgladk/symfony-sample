<?php

namespace AppBundle\Controller\API;

use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class ProductController extends FOSRestController
{
    /**
     * @ApiDoc(
     *     section="Product",
     *     description="Get all products"
     * )
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $products = $this->getDoctrine()->getRepository('AppBundle:Product')->findAll();
        $view = $this->view($products, 200);
        return $this->handleView($view);
    }
}
