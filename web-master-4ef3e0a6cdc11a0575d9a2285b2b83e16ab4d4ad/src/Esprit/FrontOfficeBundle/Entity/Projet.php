<?php

namespace Esprit\FrontOfficeBundle\Entity;
use Symfony\Component\HttpFoundation\File\UploadedFile ;
use Symfony\Component\Validator\Constraints as Assert ;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Projet
{  
    
    

        
    /**
     * @ORM\Column(type="string", length=255, nullable=true, options={"default":"default.png"})
     */
    public $path="default.png";
    /**
     * @Assert\File(maxSize="6000000")
     */
    private $file;
    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }
    /**
 * @ORM\PostPersist()
 * @ORM\PostUpdate()
 */
    public function upload()
{
    // the file property can be empty if the field is not required
    if (null === $this->getFile()) {
        return;
    }

    // use the original file name here but you should
    // sanitize it at least to avoid any security issues

    // move takes the target directory and then the
    // target filename to move to
    $this->getFile()->move(
        $this->getUploadRootDir(),
        $this->getFile()->getClientOriginalName()
    );

    // set the path property to the filename where you've saved the file
    $this->path = $this->getFile()->getClientOriginalName();

    // clean up the file property as you won't need it anymore
    $this->file ;
}
            // your own logic     } } 
    


 public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/projets';
    }



    /**
     * Set path
     *
     * @param string $path
     * @return Categorie
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="canaouite", type="integer")
     */
    private $canaouite=0;
    
    function getCanaouite() {
        return $this->canaouite;
    }

    function setCanaouite($canaouite) {
        $this->canaouite = $canaouite;
    }

        /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var float
     *
     * @ORM\Column(name="budget", type="float")
     */
    private $budget;

    /**
     * @var \integer
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    
    private $type;
     /**
     *
     * @ORM\ManyToOne(targetEntity="User")
     * 
     */
    private $idUser;
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;
    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255)
     */
    private $categorie;
    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;
    

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
     * Set titre
     *
     * @param string $titre
     * @return Projet
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set budget
     *
     * @param float $budget
     * @return Projet
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return float 
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set duree
     *
     * @param \interger $duree
     * @return Projet
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return \integer
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Projet
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
    

    

            
    function getDescription() {
        return $this->description;
    }


    function setDescription($description) {
        $this->description = $description;
    }


    function getIdUser() {
        return $this->idUser;
    }

    function getCategorie() {
        return $this->categorie;
    }

    function getPays() {
        return $this->pays;
    }
    function setIdUser($idUser) {
        $this->idUser = $idUser;
    }

    function setCategorie($categorie) {
        $this->categorie = $categorie;
    }

    function setPays($pays) {
        $this->pays = $pays;
    }

public function __construct() {
    $this->path="default.png";
}

    
  /**
     * @ORM\Column(type="string", length=255, options={"default":"non validé"})
     */
    public $etat="non validé";
    
    function getEtat() {
        return $this->etat;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }


}
