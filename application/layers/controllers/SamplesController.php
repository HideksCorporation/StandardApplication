<?php

namespace Application\Controllers;

use Hideks\Controller;

class SamplesController extends Controller
{
    
    public function listAction()
    {
        return $this->renderTo('samples/list.html');
    }
    
    public function getAction($title, $id)
    {
        $this->view->title = $title;
        
        $this->view->id = $id;
        
        return $this->renderTo('samples/get.html');
    }
    
}