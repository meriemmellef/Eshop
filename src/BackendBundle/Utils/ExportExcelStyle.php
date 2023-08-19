<?php
namespace BackendBundle\Utils;

/**
 * Created by PhpStorm.
 * User: root
 * Date: 28/12/2015
 * Time: 00:32
 */
class ExportExcelStyle
{


    public $clientnameStyle = array(
        'alignment' => array(
            'horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => \PHPExcel_Style_Alignment::VERTICAL_CENTER,
        ),
        'borders' => array(
            'allborders' => array(
                'style' => \PHPExcel_Style_Border::BORDER_MEDIUM
            )
        ),
        "font" => array("bold" => true)
    );


    public $frontierStyle = array(
        'borders' => array(
            'right' => array(
                'style' => \PHPExcel_Style_Border::BORDER_MEDIUM
            )
        )
    );


    public $rowGray = array(
        'type' => \PHPExcel_Style_Fill::FILL_SOLID,
        'rotation' => 0,
        'startcolor' => array(
            'rgb' => 'f6f6f6'
        ),
        'endcolor' => array(
            'argb' => 'f6f6f6'
        )
    );



    public $headerStyle = array(
        'alignment' => array(
            'horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => \PHPExcel_Style_Alignment::VERTICAL_CENTER,
        ),
        'borders' => array(
                    'bottom' => array(
                        'style' => \PHPExcel_Style_Border::BORDER_MEDIUM
                    ),
                    'left' => array(
                        'style' => \PHPExcel_Style_Border::BORDER_MEDIUM
                    ),
                    'top' => array(
                        'style' => \PHPExcel_Style_Border::BORDER_MEDIUM
                    ),
                    'right' => array(
                        'style' => \PHPExcel_Style_Border::BORDER_MEDIUM
                    )
                ),
        "font" => array("bold" => true)
    );

public $dataStyle = array(
        'alignment' => array(
            'horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => \PHPExcel_Style_Alignment::VERTICAL_CENTER,
        ),
        'borders' => array(
                    'bottom' => array(
                        'style' => \PHPExcel_Style_Border::BORDER_MEDIUM
                    ),
                    'left' => array(
                        'style' => \PHPExcel_Style_Border::BORDER_MEDIUM
                    ),
                    'top' => array(
                        'style' => \PHPExcel_Style_Border::BORDER_MEDIUM
                    ),
                    'right' => array(
                        'style' => \PHPExcel_Style_Border::BORDER_MEDIUM
                    )
                ),
    );



}