<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
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
        return new Response(sprintf(
            'Next smash incoming soon! %s',
            $smash
        ));
    }

}