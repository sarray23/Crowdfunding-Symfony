<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Comment
 *
 * @author HOUCEM-pc
 */

namespace Esprit\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Comment as BaseComment;
use Symfony\Component\Security\Core\User\UserInterface;
use FOS\CommentBundle\Model\SignedCommentInterface;
use FOS\CommentBundle\Model\RawCommentInterface;
use FOS\CommentBundle\Model\VotableCommentInterface;

/**
 * 
 * @ORM\Entity
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Comment extends BaseComment implements SignedCommentInterface, VotableCommentInterface {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Thread of this comment
     *
     * @var Thread
     * @ORM\ManyToOne(targetEntity="Thread")
     */
    protected $thread;

    /**
     * Author of the comment
     *
     * @ORM\ManyToOne(targetEntity="Esprit\FrontOfficeBundle\Entity\User")
     * @var User
     */
    protected $author;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Probleme")
     */
    private $idComm;

    /**
     * @ORM\Column(name="rawBody", type="text", nullable=true)
     * @var string
     */
    protected $rawBody;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $score = 0;

    
        
    /**
     * 
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $idUtilisateur;
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="Probleme")
     */
    private $idProbleme;
    
    
    
    
    function getRawBody() {
        return $this->rawBody;
    }

    function setRawBody($rawBody) {
        $this->rawBody = $rawBody;
    }

    public function setAuthor(UserInterface $author) {
        $this->author = $author;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getAuthorName() {
        if (null === $this->getAuthor()) {
            return 'Anonymous';
        }

        return $this->getAuthor()->getUsername();
    }

    /**
     * Increments the comment score by the provided
     * value.
     *
     * @param integer value
     *
     * @return integer The new comment score
     */
    public function incrementScore($by = 1) {
        $this->score += $by;
    }

    /**
     * Returns the current score of the comment.
     *
     * @return integer
     */
    public function setScore($score) {
        return $this->score;
    }

    /**
     * Returns the current score of the comment.
     *
     * @return integer
     */
    public function getScore() {
        return $this->score;
    }

}
