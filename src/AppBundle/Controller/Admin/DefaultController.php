<?php

namespace AppBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function indexAction()
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('fos_user_security_login');
        }
        return $this->redirectToRoute('admin_default');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function defaultAction()
    {
        return $this->render('default/index.html.twig');
    }
}
