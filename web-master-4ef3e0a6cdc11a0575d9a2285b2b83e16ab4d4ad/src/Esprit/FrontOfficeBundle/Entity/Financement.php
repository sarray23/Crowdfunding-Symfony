<?php

namespace Esprit\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Financement
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Financement
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;


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
     * Set type
     *
     * @param string $type
     * @return Financement
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set montant
     *
     * @param float $montant
     * @return Financement
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float 
     */
    public function getMontant()
    {
        return $this->montant;
    }
    
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $idUtilisateur;
    function getIdUtilisateur() {
        return $this->idUtilisateur;
    }

    function setIdUtilisateur($idUtilisateur) {
        $this->idUtilisateur = $idUtilisateur;
    }
    /**
     * 
     * @ORM\ManyToOne(targetEntity="Projet")
     */
    private $idprojet;
    function getIdprojet() {
        return $this->idprojet;
    }

    function setIdprojet($idprojet) {
        $this->idprojet = $idprojet;
    }




}
