<?php

namespace FrontendBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FrontendBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
