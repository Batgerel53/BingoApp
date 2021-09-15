<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */

    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
    * @Route ("/bingo", name="bingo")
     */

    public  function bingo(): Response
    {
        return $this->render('index/bingo.html.twig', [
           'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route ("/ad", name="ad")
     */

    public  function ad(): Response
    {
        return $this->render('index/ad.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }



}
