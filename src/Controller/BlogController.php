<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'a' => 'Amira',
        ]);
    }
    #[Route('/blog/age/{a<\d{1,2}>}', name: 'app_blog_name')]
    public function age($a): Response
    {
        return $this->render('blog/article.html.twig', [
            'a' => $a,
        ]);
    }
    #[Route('/blog/user', name: 'app_blog_user')]
    public function Alluser(): Response
    {
        $users=[['name'=>'AMIRA','age'=>21],
                ['name'=>'AZER','age'=>20],
                ['name'=>'BAYI','age'=>22],
                ['name'=>'DAMINO','age'=>19],];
        return $this->render('blog/AllUser.html.twig', [
            'users' => $users,
        ]);
    }
    #[Route('/blog/articles', name: 'app_blog_articles')]
    public function Article():Response{
        $Articles = [
            ['titre' => 'Le premier article', 'resume' => 'Résumé du premier article','date_publication' => '2024-01-01', 'auteur' => 'Meriam'],
            ['titre' => 'Le deuxième article ', 'resume' => 'Résumé du deuxième article', 'date_publication' => '2022-05-15', 'auteur' => 'Ahmed'],
            ['titre' => 'Le troisième article ', 'resume' => 'Résumé du troisième resume','date_publication' => '2020-03-10', 'auteur' => 'Nidhal'],
            ]; 
            return $this->render('blog/articles.html.twig',[
                'ar'=>$Articles,
            ]);
    }
}
