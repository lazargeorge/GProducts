<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Blogger\BlogBundle\Form\EnquiryType2;

class SearchController extends Controller
{
    public function indexAction()
    {
    	
   	if(isset($_GET['find'])){

    	$find = $_GET["find"];

    $url = $this->generateUrl('BloggerBlogBundle_find', array(
        'id' => $find
        
    ));
        return $this->redirect($url);
}

       return $this->render('BloggerBlogBundle:Search:index.html.twig');
    }

    public function findAction($id)
    {
    			
    	return $this->render('BloggerBlogBundle:Search:find.html.twig', array('id' => $id));	
		}

}