<?php

namespace Airi\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AiriSiteBundle:Default:index.html.twig', array('name' => $name));
    }

    public function createAction()
    {
        $users = ['9999' => 'неизвестный'];

        return $this->render('AiriSiteBundle:Default:create.html.twig', ['users' => $users]);
    }
}
