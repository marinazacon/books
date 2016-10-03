<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 03/10/16
 * Time: 21.49
 */
namespace Categories\Form;

use Zend\InputFilter\InputFilter;

Class CategoryFilter extends InputFilter
{
    public function __construct()
    {
        $this->add(array(
            'name' => 'title',
            'required' => true
            )
        );

    }
}