<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Athlete;
use AppBundle\Entity\Meeting;
use AppBundle\Entity\Result;
use AppBundle\Entity\User;
use AppBundle\Entity\Inscription;
use AppBundle\Form\MeetingType;
use AppBundle\Form\AthleteType;
use AppBundle\Form\ResultType;


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
     * @Route("/member", name="member")
     */
    public function memberAction(Request $request)
    {
        $em= $this->getDoctrine()->getManager();
        $meetings = $em->getRepository('AppBundle:Meeting')->findAll();

         
        return $this->render('default/member.html.twig', ['meetings'=>$meetings]);    
    }  
    
     /**
     * @Route("/member/{id}", name="inscriptionCourse")
     */
    public function inscriptionCourseAction(Request $request, $id)
    {
        $em= $this->getDoctrine()->getManager();
        $meetings = $em->getRepository('AppBundle:Meeting')->find($id);
        
        
        
          $user = $this->getUser();
        $athlete= $user->getAthlete();
        
        $result = new Result();
        $result->setAthlete($athlete);
        $result->setMeeting($meetings);
        $em->persist($result);
        $em->flush();
         
        return $this->render('default/member.html.twig', ['meetings'=>$meetings]);    
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
    
    
     /**
     * @Route("/admin/master", name="master")
     */
    public function masterAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
            //affiche le nom d'une course
            $meetings = $em->getRepository("AppBundle:Meeting")->findAll(); 
            
        return $this->render('default/master.html.twig', ['meetings'=>$meetings]);    
    }
    
    
         /**
         * @Route("/admin/master/remove/{id}", name="removeCourse")
         */
        public function removeCourseAction(Request $request, $id)
        {
            $em= $this->getDoctrine()->getManager();
            $repository = $em->getRepository('AppBundle:Meeting');
            $item = $repository->findOneBy(array('id'=>$id));
            $em->remove($item);
            $em->flush();
            return $this->redirectToRoute('master');
        }
        
    
     /**
     * @Route("/user/inscriptioncoureur", name="inscription")
     * @method({"POST"})
     */
    public function inscriptioncoureurAction(Request $request)
    {
               $athleteid =$this->getUser()->getAthlete();
        $id=$this->getUser()->getId();
        if (!$athleteid) {
            /* create a new runner*/
            $Athlete = new Athlete();
            $form = $this->createForm(AthleteType::class, $Athlete);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($Athlete);
                /* Garder l'information du coureur*/
                $fname = $form['firstname']->getData();
                $lname = $form['lastname']->getData();
                $birth = $form['birthdate']->getData();
                $em->flush();
                /*Recherchez l'ID de l'athlète en fonction de l'information à partir du formulaire*/
                $query = $em->createQuery(
                    'SELECT i FROM AppBundle:Athlete i 
                 WHERE i.firstname=:firstname AND i.lastname=:lastname AND i.birthdate=:birth')->setParameter('firstname', $fname)
                    ->setParameter('lastname', $lname)
                    ->setParameter('birth', $birth);
                $athletic = $query->getSingleResult();
                $user = $this->getUser();
                $user->setAthlete($athletic);
                $em->persist($user);
                $em->flush();
                $id=$this->getUser()->getId();
                return $this->render('default/member.html.twig', ['firstname' => $fname, 'lastname' => $lname, 'id'=>$id]);
            }
            return $this->render('default/inscriptioncoureur.html.twig', [
                'AthleteType' => $form->createView()
            ]);
        }
        $em = $this->getDoctrine()->getManager();
        $query=$em->createQuery(
                                'SELECT i FROM AppBundle:Athlete i Where i.id=:Athleteid'
        )->setParameter('Athleteid', $athleteid);
        $Athlete=$query->getSingleResult();
        $fname=$Athlete->getFirstname();
        $lname=$Athlete->getLastname();
         
        return $this->render('default/index.html.twig', []);    
    }
    
    
    
        /**
     * @route("/admin/nouvelle_course", name="nouvelle_course")
     * @method({"POST"})
     */
    public function nouvellecourseAction(Request $request){
        $race = new Meeting();
        $form = $this ->createForm(MeetingType::class, $race);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($race);
            $em->flush();
            return $this->render('default/index.html.twig');
        }
        return $this->render('default/nouvellecourse.html.twig', [
            'MeetingType'=>$form->createView()
        ]);
    }
}