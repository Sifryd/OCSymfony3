<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class AdvertController extends Controller{

	public function indexAction(){
		$url = $this -> get('router')->generate('oc_platform_home', array(), UrlGeneratorInterface::ABSOLUTE_URL);
		return new Response("L'URL de l'annonce : ". $url);
	}

	public function viewAction($id){
		return new Response("<html><body>Affichega de l'annonce : " .$id."</body></html>");
	}

	public function viewSlugAction($slug, $year, $_format){
		return new Response("On pourrait afficher l'annonce correspondant au
            slug '".$slug."', créée en ".$year." et au format ".$_format.".");
	}
}