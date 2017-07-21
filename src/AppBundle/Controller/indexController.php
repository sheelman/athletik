<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
 * Description of controller
 *
 * @author sheelman
 */
class indexController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
       $em = $this->getDoctrine()->getManager();
            $meetings = $em->getRepository("AppBundle:Meeting")->findAll();
            $repository=$em->getRepository("AppBundle:Result");
            $athletes = $repository->findBy( array('meeting'=> '1'), array('points'=>'DESC'));
            $athletes2 = $repository->findBy( array('meeting'=> '2'), array('points'=>'DESC'));
            $athletes3 = $repository->findBy( array('meeting'=> '3'), array('points'=>'DESC'));
            $athletes4 = $repository->findBy( array('meeting'=> '4'), array('points'=>'DESC'));
            $athletes5 = $repository->findBy( array('meeting'=> '5'), array('points'=>'DESC'));
        return $this->render('default/index.html.twig', ['meetings'=>$meetings, 'athletes'=>$athletes, 'athletes2'=>$athletes2, 'athletes3'=>$athletes3, 'athletes4'=>$athletes4, 'athletes5'=>$athletes5]);    
    }

}