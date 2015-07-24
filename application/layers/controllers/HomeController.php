<?php

namespace Application\Controllers;

use Hideks\Controller;

class HomeController extends Controller
{
    
    public function indexAction()
    {
        return $this->renderTo('home/index.html');
    }
    
}