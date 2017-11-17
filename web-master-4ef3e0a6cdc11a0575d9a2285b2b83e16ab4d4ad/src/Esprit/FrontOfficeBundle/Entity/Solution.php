<?php

namespace Esprit\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solution
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Solution
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
     * @ORM\Column(name="descriptionSolution", type="string", length=255)
     */
    private $descriptionSolution;


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
     * Set descriptionSolution
     *
     * @param string $descriptionSolution
     * @return Solution
     */
    public function setDescriptionSolution($descriptionSolution)
    {
        $this->descriptionSolution = $descriptionSolution;

        return $this;
    }

    /**
     * Get descriptionSolution
     *
     * @return string 
     */
    public function getDescriptionSolution()
    {
        return $this->descriptionSolution;
    }
    /**
     * 
     * @ORM\ManyToOne(targetEntity="Utilisateur")
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
     * @ORM\ManyToOne(targetEntity="Probleme")
     */
    private $idProbleme;
    function getIdProbleme() {
        return $this->idProbleme;
    }

    function setIdProbleme($idProbleme) {
        $this->idProbleme = $idProbleme;
    }



}
