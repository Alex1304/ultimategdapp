<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

	/**
	 * Home page of the website
	 * 
	 * @Route("/")
	 */
	public function indexAction() {
		return $this->render('home/index.html.twig');
	}
}