<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    /**
     * @var \AppBundle\Entity\Athlete
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Athlete")
     *
     */
    protected $Athlete;
    
     /**
     * @return Athlete
     */
    function getAthlete() {
        return $this->Athlete;
    }

     /**
     * @param Athlete $Athlete
     */
    function setAthlete(\AppBundle\Entity\Athlete $Athlete) {
        $this->Athlete = $Athlete;
    }


}
