<?php

namespace WildTreckBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sports
 */
class Sports
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $sports;


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
     * Set sports
     *
     * @param string $sports
     * @return Sports
     */
    public function setSports($sports)
    {
        $this->sports = $sports;

        return $this;
    }

    /**
     * Get sports
     *
     * @return string 
     */
    public function getSports()
    {
        return $this->sports;
    }
}
