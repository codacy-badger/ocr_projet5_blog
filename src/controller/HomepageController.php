<?php

namespace Projet5\controller;

use Projet5\controller\TwigController;

class HomepageController extends TwigController{

	public function index(){

	        echo $this->twig->render('homepage.twig');
	    }
	}



