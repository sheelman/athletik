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



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set meeting
     *
     * @param \AppBundle\Entity\Meeting $meeting
     *
     * @return Inscription
     */
    public function setMeeting(\AppBundle\Entity\Meeting $meeting = null)
    {
        $this->meeting = $meeting;

        return $this;
    }

    /**
     * Get meeting
     *
     * @return \AppBundle\Entity\Meeting
     */
    public function getMeeting()
    {
        return $this->meeting;
    }

    /**
     * Set athlete
     *
     * @param \AppBundle\Entity\Athlete $athlete
     *
     * @return Inscription
     */
    public function setAthlete(\AppBundle\Entity\Athlete $athlete = null)
    {
        $this->athlete = $athlete;

        return $this;
    }

    /**
     * Get athlete
     *
     * @return \AppBundle\Entity\Athlete
     */
    public function getAthlete()
    {
        return $this->athlete;
    }
}
