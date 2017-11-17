<?php

namespace Esprit\FrontOfficeBundle\Service;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

class myEncode implements PasswordEncoderInterface
{

    public function encodePassword( $raw, $salt ) {
        //do not use salt here
        return $raw;
    }

    public function isPasswordValid( $encoded, $raw, $salt ) {
        return $encoded === $this->encodePassword( $raw, $salt );
    }
}