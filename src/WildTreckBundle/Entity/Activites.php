<?php

namespace WildTreckBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activites
 */
class Activites
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $activites;


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
     * Set activites
     *
     * @param string $activites
     * @return Activites
     */
    public function setActivites($activites)
    {
        $this->activites = $activites;

        return $this;
    }

    /**
     * Get activites
     *
     * @return string 
     */
    public function getActivites()
    {
        return $this->activites;
    }
}
