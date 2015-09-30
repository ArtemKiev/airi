<?php

namespace Airi\TaskBundle\Controller;

use Airi\SiteBundle\Entity\Site;
use Airi\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $em = $this->getDoctrine()->getManager();
        $site = new Site();
        $site->setDomain('nepro100.com.ua');
        $site->setContractAmount('0.00');
        $site->setStopPayment('0.00');
        $site->setDebt('0.00');
        $status = new User\Status();
        $site->setStatus('rr');
        $site->setReceiptDate(new \DateTime('now'));
        $em->persist($site);
        $em->flush();
        return $this->render('AiriTaskBundle:Site:index.html.twig', array('name' => $name));
    }
}
