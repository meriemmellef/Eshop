<?php

namespace FrontendBundle\Twig;

use FrontendBundle\Utils\Utils;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use WebBundle\Entity\Pays;

class AppExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return array(
            new TwigFunction('formated_price', array($this, 'getFormatedPrice')),
        );
    }

    public function getFormatedPrice( $price,  $pays,  $with_devise = true)
    {
        return Utils::getFormatedPrice($price, $pays, $with_devise);
    }
}
