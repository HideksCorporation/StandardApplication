<?php

namespace Project\Controllers;

use Hideks\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SamplesController extends Controller
{
    
    public function listAction(Request $request)
    {
        return $this->renderTo('samples/list', array(), new Response());
    }
    
    public function getAction(Request $request, $title, $id)
    {
        return $this->renderTo('samples/get', array(
            'title' => $title,
            'id'    => $id
        ), new Response());
    }
    
}