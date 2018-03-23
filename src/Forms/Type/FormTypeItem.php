<?php


namespace App\Forms\Type;


use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;



class FormTypeItem extends AbstractType{

    public function buildForm (FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add ('codigoItem', TextType::class,array(
                'attr' => array(
                    'id' => '_codigoItem',
                    'name' => '_codigoItem'
                )
            ))
            ->add ('nombreProducto', TextType::class,array(
                'attr' => array(
                    'id' => '_nombreProducto',
                    'name' => '_nombreProducto'
                )
            ))
            ->add ('valor', TextType::class,array(
                'attr' => array(
                    'id' => '_valor',
                    'name' => '_valor'
                )
            ))
            ->add ('iva', TextType::class,array(
                'attr' => array(
                    'id' => '_iva',
                    'name' => '_iva'
                )
            ))
            ->add ('btnEnviar', SubmitType::class,array(
                'attr' => array(
                    'id' => '_btnEnviar',
                    'name' => '_btnEnviar'),
                'label' => 'GUARDAR'

            ));
    }
}
