<?php

namespace Base\GuelekBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $articles = $em->getRepository("BaseGuelekBundle:Article")->findAll();
        
        return $this->render('BaseGuelekBundle:Default:index.html.twig', array('articles' => $articles));
    }
    
    public function productAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $article = $em->getRepository("BaseGuelekBundle:Article")->find($id);
        
        return $this->render('BaseGuelekBundle:Default:article.html.twig', array('article' => $article));
    }
}
