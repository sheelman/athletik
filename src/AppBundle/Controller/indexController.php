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
       
         
        return $this->render('default/index.html.twig', []);    
    }
     /**
     * @Route("/resultat", name="resultat")
     */
    public function resultatAction(Request $request)
    {
       $em = $this->getDoctrine()->getManager();
       
       
            
            //affiche le nom d'une course
            $meetings = $em->getRepository("AppBundle:Meeting")->findAll();
            
            //récupérer un id de course
            $id = $request->query->get('meeting');
            $selectedMeeting= $em->getRepository("AppBundle:Meeting")->findOneBy(array('id'=>$id));
            
            
            //affiche le resultat des athletes par l'id de la course avec le temps
            $result = $em ->getRepository('AppBundle:Result');
            $resultglobo = $result->findBy(array('meeting'=>$id), array('points'=>'DESC'));
         
        return $this->render('default/resultat.html.twig', ['meetings'=>$meetings, 'results'=>$resultglobo, 'selectedMeeting'=>$selectedMeeting]);    
    }
     /**
     * @Route("/classement", name="classement")
     */
    public function classementAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $sql='SELECT SUM(result.points) as total, athlete.lastname, athlete.firstname FROM result inner join athlete on result.athlete_id = athlete.id inner join meeting on result.meeting_id = meeting.id WHERE YEAR(CURRENT_DATE()) = 2017 GROUP BY athlete.id ORDER BY total DESC';
        $global=$em->getConnection()->prepare($sql);
        $global->execute();
        $resultat=$global->fetchAll();
        return $this->render('default/classement.html.twig',['classement'=>$resultat]);
            
    }
}