<?php

namespace Esprit\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ForumAnswer
 *
 * @ORM\Table(name="forum_answer")
 * @ORM\Entity
 */
class ForumAnswer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="a_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aId;

    /**
     * @var integer
     *
     * @ORM\Column(name="question_id", type="integer", nullable=false)
     */
    private $questionId;

    /**
     * @var string
     *
     * @ORM\Column(name="a_name", type="string", length=65, nullable=false)
     */
    private $aName;

    /**
     * @var string
     *
     * @ORM\Column(name="a_email", type="string", length=65, nullable=false)
     */
    private $aEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="a_answer", type="string", length=499, nullable=false)
     */
    private $aAnswer;

    /**
     * @var string
     *
     * @ORM\Column(name="a_datetime", type="string", length=65, nullable=false)
     */
    private $aDatetime;



    /**
     * Get aId
     *
     * @return integer 
     */
    public function getAId()
    {
        return $this->aId;
    }

    /**
     * Set questionId
     *
     * @param integer $questionId
     * @return ForumAnswer
     */
    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;

        return $this;
    }

    /**
     * Get questionId
     *
     * @return integer 
     */
    public function getQuestionId()
    {
        return $this->questionId;
    }

    /**
     * Set aName
     *
     * @param string $aName
     * @return ForumAnswer
     */
    public function setAName($aName)
    {
        $this->aName = $aName;

        return $this;
    }

    /**
     * Get aName
     *
     * @return string 
     */
    public function getAName()
    {
        return $this->aName;
    }

    /**
     * Set aEmail
     *
     * @param string $aEmail
     * @return ForumAnswer
     */
    public function setAEmail($aEmail)
    {
        $this->aEmail = $aEmail;

        return $this;
    }

    /**
     * Get aEmail
     *
     * @return string 
     */
    public function getAEmail()
    {
        return $this->aEmail;
    }

    /**
     * Set aAnswer
     *
     * @param string $aAnswer
     * @return ForumAnswer
     */
    public function setAAnswer($aAnswer)
    {
        $this->aAnswer = $aAnswer;

        return $this;
    }

    /**
     * Get aAnswer
     *
     * @return string 
     */
    public function getAAnswer()
    {
        return $this->aAnswer;
    }

    /**
     * Set aDatetime
     *
     * @param string $aDatetime
     * @return ForumAnswer
     */
    public function setADatetime($aDatetime)
    {
        $this->aDatetime = $aDatetime;

        return $this;
    }

    /**
     * Get aDatetime
     *
     * @return string 
     */
    public function getADatetime()
    {
        return $this->aDatetime;
    }
}
