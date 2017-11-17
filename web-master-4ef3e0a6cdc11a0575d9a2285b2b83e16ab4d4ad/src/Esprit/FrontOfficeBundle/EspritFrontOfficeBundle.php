<?php

namespace Esprit\FrontOfficeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EspritFrontOfficeBundle extends Bundle
{ public function getParent()     {         return 'FOSUserBundle';     }  
}
