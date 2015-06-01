<?php

namespace Project\Controllers;

use Hideks\Controller;
use Symfony\Component\HttpFoundation\Response;

class SamplesController extends Controller
{
    
    public function listAction()
    {
        return $this->renderTo('samples/list.html', new Response());
    }
    
    public function getAction($title, $id)
    {
        $this->view->title = $title;
        
        $this->view->id = $id;
        
        return $this->renderTo('samples/get.html', new Response());
    }
    
}