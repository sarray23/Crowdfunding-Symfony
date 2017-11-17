<?php

namespace Esprit\FrontOfficeBundle\Entity;
use Esprit\FrontOfficeBundle\Entity\Personne;
use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Admin extends Personne
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="responsabilitee", type="string", length=255)
     */
    private $responsabilitee;


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
     * Set responsabilitee
     *
     * @param string $responsabilitee
     * @return Admin
     */
    public function setResponsabilitee($responsabilitee)
    {
        $this->responsabilitee = $responsabilitee;

        return $this;
    }

    /**
     * Get responsabilitee
     *
     * @return string 
     */
    public function getResponsabilitee()
    {
        return $this->responsabilitee;
    }
}
