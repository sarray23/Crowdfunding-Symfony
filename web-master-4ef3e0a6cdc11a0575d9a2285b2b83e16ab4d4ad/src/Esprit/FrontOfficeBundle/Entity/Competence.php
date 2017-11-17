<?php

namespace Esprit\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competence
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Competence
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
     * @ORM\Column(name="libelleCompetence", type="string", length=255,nullable=true, options={"default":"rien"})
     */
    private $libelleCompetence;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255,nullable=true, options={"default":"rien"})
     */
    private $categorie;


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
     * Set libelleCompetence
     *
     * @param string $libelleCompetence
     * @return Competence
     */
    public function setLibelleCompetence($libelleCompetence)
    {
        $this->libelleCompetence = $libelleCompetence;

        return $this;
    }

    /**
     * Get libelleCompetence
     *
     * @return string 
     */
    public function getLibelleCompetence()
    {
        return $this->libelleCompetence;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Competence
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}
