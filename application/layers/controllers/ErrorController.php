<?php

namespace Application\Controllers;

use Hideks\Controller;
use Symfony\Component\Debug\Exception\FlattenException;

class ErrorController extends Controller
{
    
    public function exceptionAction(FlattenException $exception)
    {
        $this->view->status_code = $exception->getStatusCode();
        
        return $this->renderTo('error/exception.html');
    }
    
}