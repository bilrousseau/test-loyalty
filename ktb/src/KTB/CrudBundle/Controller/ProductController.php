<?php

namespace KTB\CrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    public function indexAction()
    {
        return $this->render('KTBCrudBundle:Default:index.html.twig');
    }
}