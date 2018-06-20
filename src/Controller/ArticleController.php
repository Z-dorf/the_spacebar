<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */

    public function homepage()
    {
        return new Response('IT S WORKING !');
    }

    // smash peux être remplacer par n'importe quel mot, ci dessous je print l'url !
    /**
     * @Route("/news/{smash}")
     */
    // print ce qu'il y a dans l'url sera utile par exemple pour récuperer une ID util


    public function show($smash)
    {

        $comments = [
            'This game is the best smash ever !',
            "Yay ! Ridley wasn't too big '!",
            "Waaaaah ?! Where's Waluigi ?!",
        ];

        // dump($smash, $this); marche aussi dans le twig, le debug le rend plus ergo à regarder

        return $this->render('article/show.html.twig', [
            'title' =>ucwords(str_replace('-', ' ', $smash)),
            'comments' => $comments,
        ]);
        }


    // public function show($smash)
    // {
    //     return new Response(sprintf(
    //         'Next smash incoming soon! %s',
    //         $smash
    //     ));
    }

