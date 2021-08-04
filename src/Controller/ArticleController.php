<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController {
  /**
   * @Route("/",methods={"GET"})
   */
  public function index(){
    return $this->render('articles/index.html.twig',array("name"=>"Abderrahmen"));
  }
}