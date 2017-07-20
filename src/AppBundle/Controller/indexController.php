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
            $meetingName = $em->getRepository("AppBundle:Meeting")->findAll();
            $repository=$em->getRepository("AppBundle:Result");
            $athletes = $repository->findBy( array('meeting'=> '1'), array('points'=>'DESC'));
        return $this->render('default/index.html.twig', ['result'=>$meetingName, 'athletes'=>$athletes]);    
    }

}