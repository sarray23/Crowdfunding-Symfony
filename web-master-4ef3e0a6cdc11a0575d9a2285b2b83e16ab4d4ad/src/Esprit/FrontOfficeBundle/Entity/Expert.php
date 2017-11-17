<?php

namespace Esprit\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Esprit\FrontOfficeBundle\Entity\Utilisateur;
/**
 * Expert
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Expert 
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var float
     *
     * @ORM\Column(name="noteGenerale", type="float", nullable=true, options={"default":"0"})
     */
    private $noteGenerale=0;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;
    
    
    function getUsername() {
        return $this->username;
    }

    function setUsername($username) {
        $this->username = $username;
    }

        
    
    /**
     * Set id
     *
     * @param integer $id
     * @return Expert
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    
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
     * Set noteGenerale
     *
     * @param float $noteGenerale
     * @return Expert
     */
    public function setNoteGenerale($noteGenerale)
    {
        $this->noteGenerale = $noteGenerale;

        return $this;
    }

    /**
     * Get noteGenerale
     *
     * @return float 
     */
    public function getNoteGenerale()
    {
        return $this->noteGenerale;
    }
}
