<?php

namespace Project\Controllers;

use Hideks\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    
    public function indexAction(Request $request)
    {
        // Response
        $last_modified_date = new \DateTime('1989/08/10');
        
        $expire_date = new \DateTime;
        $expire_date->modify('+60 seconds');
        
        $response = new Response();
        $response->setPublic();
        $response->setEtag('ABC');
        $response->setLastModified($last_modified_date);
        $response->setMaxAge(10);
        $response->setSharedMaxAge(10);
        $response->setExpires($expire_date);
        
        if($response->isNotModified($request)){
            return $response;
        }
        
        return $this->renderTo('home/index', array(), $response);
    }
    
}