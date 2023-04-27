<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\VarDumper\Cloner\Data;

class MessageController extends AbstractController
{
    #[Route('/api/create-message', name: 'app_message')]
    public function new(Request $request): Response
    {
        
        $data = json_decode($request->getContent(), true);
        $message = $data['message'];
        
        return new Response($message);
    }
}
