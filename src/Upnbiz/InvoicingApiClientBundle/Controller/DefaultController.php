<?php

namespace Upnbiz\InvoicingApiClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UpnbizInvoicingApiClientBundle:Default:index.html.twig');
    }
}
