<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Thread
 *
 * @author HOUCEM-pc
 */
namespace Esprit\FrontOfficeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Thread as BaseThread;
/**
* @ORM\Entity
* @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
*/
class Thread extends BaseThread
{
/**
* @var string $id
*
* @ORM\Id
* @ORM\Column(type="string")
*/
protected $id;
}
