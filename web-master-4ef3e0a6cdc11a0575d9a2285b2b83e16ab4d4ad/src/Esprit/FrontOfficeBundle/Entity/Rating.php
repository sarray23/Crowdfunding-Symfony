<?php
// src/MyProject/MyBundle/Entity/Rating.php

namespace Esprit\FrontOfficeBundle\Entity;

use DCS\RatingBundle\Entity\Rating as BaseRating;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Rating extends BaseRating
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="Esprit\FrontOfficeBundle\Entity\Vote", mappedBy="rating")
     */
    protected $votes;
}