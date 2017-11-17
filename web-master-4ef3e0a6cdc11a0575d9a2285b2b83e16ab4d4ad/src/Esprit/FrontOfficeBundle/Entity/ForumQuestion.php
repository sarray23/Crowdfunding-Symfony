<?php

namespace Esprit\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ForumQuestion
 *
 * @ORM\Table(name="forum_question")
 * @ORM\Entity
 */
class ForumQuestion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="topic", type="string", length=255, nullable=false)
     */
    private $topic;

    /**
     * @var string
     *
     * @ORM\Column(name="detail", type="text", nullable=false)
     */
    private $detail;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=65, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=65, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="datetime", type="string", length=25, nullable=false)
     */
    private $datetime;

    /**
     * @var integer
     *
     * @ORM\Column(name="view", type="integer", nullable=true)
     */
    private $view;

    /**
     * @var integer
     *
     * @ORM\Column(name="reply", type="integer", nullable=true)
     */
    private $reply;



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
     * Set topic
     *
     * @param string $topic
     * @return ForumQuestion
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * Get topic
     *
     * @return string 
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Set detail
     *
     * @param string $detail
     * @return ForumQuestion
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail
     *
     * @return string 
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return ForumQuestion
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return ForumQuestion
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set datetime
     *
     * @param string $datetime
     * @return ForumQuestion
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * Get datetime
     *
     * @return string 
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Set view
     *
     * @param integer $view
     * @return ForumQuestion
     */
    public function setView($view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * Get view
     *
     * @return integer 
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Set reply
     *
     * @param integer $reply
     * @return ForumQuestion
     */
    public function setReply($reply)
    {
        $this->reply = $reply;

        return $this;
    }

    /**
     * Get reply
     *
     * @return integer 
     */
    public function getReply()
    {
        return $this->reply;
    }
}
