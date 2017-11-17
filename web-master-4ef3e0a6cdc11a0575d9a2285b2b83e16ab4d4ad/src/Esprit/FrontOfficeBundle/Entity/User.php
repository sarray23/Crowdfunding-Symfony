<?php
namespace Esprit\FrontOfficeBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile ;
use Symfony\Component\Validator\Constraints as Assert ;
/**
* @ORM\Entity
* @ORM\Table(name="Users")
*/
class User extends BaseUser {     
    
    /**      
     *
     * @ORM\Id      
     * @ORM\Column(type="integer")       
     * @ORM\GeneratedValue(strategy="AUTO")      
     */     
    protected $id;

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
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="Rl", type="string", length=255, nullable=true, options={"default":"USERS"})
     */
    private $Rl='USERS';

    
    /**
     * @var float
     *
     * @ORM\Column(name="noteGenerale", type="float", nullable=true, options={"default":0})
     */
    private $noteGenerale=0;
    

    /**
     * 
     * @ORM\Column(name="age" ,type="date",nullable=true)
     */
    public $age;
    
    /**
     * 
     * @ORM\Column(name="solde" ,type="integer",nullable=true, options={"default":500})
     */
    public $solde=500;
    
    
    
    
    
    function getSolde() {
        return $this->solde;
    }

    function setSolde($solde) {
        $this->solde = $solde;
    }

        
    function getAge() {
        return $this->age;
    }

    function setAge($age) {
        $this->age = $age;
    }

        
    function getRl() {
        return $this->Rl;
    }

    function getNoteGenerale() {
        return $this->noteGenerale;
    }

    function setRl($Rl) {
        $this->Rl = $Rl;
    }

    function setNoteGenerale($noteGenerale) {
        $this->noteGenerale = $noteGenerale;
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
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    
        
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
    $this->file = null;
}
    public function __construct()     {         parent::__construct();         // your own logic     } } 
    
}

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
        return 'uploads/users';
    }



    
    
    
    
    
    
    /**
     * 
     * @ORM\ManyToMany(targetEntity="Competence")
     * 
     */
    private $competences;
    
    private $competence;
    
    public function addCompetences(Competence $Competencess) {
        $this->competences[] = $Competencess; 
        $this->competence=$Competencess; 
        
    } 
    function getCompetence() { 
        return $this->competence; 
        
    }
     function setCompetence($competence) {
        $this->competence = $competence;
    }

    public function removeCompetences(Competence $Competence) { 
        $this->competences->removeElement($Competence); 
        
    }
    public function getCompetences() {
        return $this->competences; 
        
    }
    
    function setCompetences(Competence $competence) { 
        $this->addCompetences($competence); 
        
    }
          

    function getIdCompetence() {
        return $this->idCompetence;
    }

    function setIdCompetence($idCompetence) {
        $this->idCompetence = $idCompetence;
    }
    
    
    
    

    }
?>