<?php
namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class FirstController{
    /**
     * @Route("/")
     */

    public function first()
    {
        return new Response("Hello From First Controller");
    }
}