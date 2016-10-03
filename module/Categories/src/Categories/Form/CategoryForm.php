<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 03/10/16
 * Time: 21.24
 */
namespace Categories\Form;

use Zend\Form\Form;
use Zend\Hydrator\ClassMethods;

class CategoryForm extends Form
{
    public function init()
    {
        $hydrator = new ClassMethods;

        $this->setAttribute('method', 'post');
        $this->setHydrator($hydrator)->setObject(new \Categories\Entity\Category());

        $this->add(array (
            'name' => 'title',
            'attributes' => array (
                'type' => 'text',
                'class' => 'form-control',
                'placeholder' => _('Write here the title of the page'),
            ),
            'options' => array (
                'label' => _('Title'),
            ),
            'filters' => array (
                array (
                    'name' => 'StringTrim'
                )
            )
        ));
        $this->add(array (
            'name' => 'submit',
            'attributes' => array (
                'type'  => 'submit',
                'class' => 'btn btn-success',
                'value' => _('Save')
            )
        ));
        $this->add(array (
            'name' => 'id',
            'attributes' => array (
                'type' => 'hidden'
            )
        ));
    }
}