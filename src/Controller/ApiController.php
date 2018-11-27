<?php

namespace App\Controller;

use FOS\RestBundle\Controller\Annotations\Route;
use FOS\RestBundle\Controller\FOSRestController;

class ApiController extends FOSRestController
{
    /**
     * @Route("/api/notification/{id}")
     *
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getNotificationAction($id)
    {
        $view = $this->view(['asdfasdfa', 'asdfasdfasd', $id], 200);

        return $this->handleView($view);
    }
}