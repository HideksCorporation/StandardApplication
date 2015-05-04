<?php

namespace Project\Controllers;

use Hideks\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Debug\Exception\FlattenException;

class ErrorController extends Controller
{
    
    public function exceptionAction(FlattenException $exception)
    {
        return $this->renderTo('error/exception', array(
            'status_code' => $exception->getStatusCode()
        ), new Response());
    }
    
}