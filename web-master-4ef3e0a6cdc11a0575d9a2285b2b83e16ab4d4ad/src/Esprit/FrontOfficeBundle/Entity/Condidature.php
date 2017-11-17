<?php

namespace Esprit\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Condidature
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Condidature
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
     * @ORM\Column(name="note", type="string", length=255)
     */
    private $note;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCondidature", type="date")
     */
    private $dateCondidature;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCloture", type="date")
     */
    private $dateCloture;


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
     * Set note
     *
     * @param string $note
     * @return Condidature
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set dateCondidature
     *
     * @param \DateTime $dateCondidature
     * @return Condidature
     */
    public function setDateCondidature($dateCondidature)
    {
        $this->dateCondidature = $dateCondidature;

        return $this;
    }

    /**
     * Get dateCondidature
     *
     * @return \DateTime 
     */
    public function getDateCondidature()
    {
        return $this->dateCondidature;
    }

    /**
     * Set dateCloture
     *
     * @param \DateTime $dateCloture
     * @return Condidature
     */
    public function setDateCloture($dateCloture)
    {
        $this->dateCloture = $dateCloture;

        return $this;
    }

    /**
     * Get dateCloture
     *
     * @return \DateTime 
     */
    public function getDateCloture()
    {
        return $this->dateCloture;
    }
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="Expert")
     */
    private $idExpert;
    function getIdExpert() {
        return $this->idExpert;
    }

    function setIdExpert($idExpert) {
        $this->idExpert = $idExpert;
    }
    /**
     * 
     * @ORM\ManyToOne(targetEntity="Idee")
     */
    private $idIdee;
    function getIdIdee() {
        return $this->idIdee;
    }

    function setIdIdee($idIdee) {
        $this->idIdee = $idIdee;
    }



}
