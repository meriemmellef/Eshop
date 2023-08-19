<?php

namespace FrontendBundle\Utils;

use WebBundle\Entity\Pays;

class Utils
{
    static function getFormatedPrice( $price, $pays,  $with_devise=true)
    {
        if ($pays instanceof Pays) {
            try {
                if ($pays->getDeviseDecimalSeparator()){
                    $DeviseDecimalSeparator = $pays->getDeviseDecimalSeparator();

                }else{
                    $DeviseDecimalSeparator = " ";
                }
                if ($pays->getDeviseThousandsSeparator()){
                    $DeviseThousandsSeparator = $pays->getDeviseThousandsSeparator();

                }else{
                    $DeviseThousandsSeparator = " ";
                }


                $formated_price = number_format($price, $pays->getDeviseNbDigitsDecimal(), $DeviseDecimalSeparator, $DeviseThousandsSeparator);
                if ($with_devise)
                    $formated_price .= " " . $pays->getDevise();

            } catch (\Exception $exception) {
                return "";
            }
        }
        if (is_array($pays)) {
            try {
                if ($pays['devise_decimal_separator']){
                    $DeviseDecimalSeparator = $pays['devise_decimal_separator'];

                }else{
                    $DeviseDecimalSeparator = " ";
                }
                if ($pays['devise_thousands_separator']){
                    $DeviseThousandsSeparator = $pays['devise_thousands_separator'];

                }else{
                    $DeviseThousandsSeparator = " ";
                }

                $formated_price = number_format($price, $pays['devise_nb_digits_decimal'], $DeviseDecimalSeparator, $DeviseThousandsSeparator);
                if ($with_devise)
                    $formated_price .= " " . $pays['devise'];
            } catch (\Exception $exception) {
                return "";
            }
        }

        return $formated_price;
    }
}
