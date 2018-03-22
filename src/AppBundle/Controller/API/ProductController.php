<?php

namespace AppBundle\Controller\API;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class ProductController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function indexAction()
    {
        return new JsonResponse([], Response::HTTP_OK);
    }
}
