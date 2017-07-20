<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscription
 *
 * @ORM\Table(name="inscription", indexes={@ORM\Index(name="meeting_id", columns={"meeting_id"}), @ORM\Index(name="athlete_id", columns={"athlete_id"})})
 * @ORM\Entity
 */
class Inscription
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Meeting
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Meeting")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="meeting_id", referencedColumnName="id")
     * })
     */
    private $meeting;

    /**
     * @var \AppBundle\Entity\Athlete
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Athlete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="athlete_id", referencedColumnName="id")
     * })
     */
    private $athlete;


}

