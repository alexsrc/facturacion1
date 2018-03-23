<?php


namespace App\Forms\Type;


use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;



class FormTypeUser extends AbstractType{

    public function buildForm (FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add ('identificacion', NumberType::class,array(
                'attr' => array(
                    'id' => '_identificacion',
                    'name' => '_identificacion'
                )
            ))
            ->add ('nombre1', TextType::class,array(
                'attr' => array(
                    'id' => '_nombre1',
                    'name' => '_nombre1'
                )
            ))
            ->add ('nombre2', TextType::class,array(
                'attr' => array(
                    'id' => '_nombre2',
                    'name' => '_nombre2'
                )
            ))
            ->add ('apellido1', TextType::class,array(
                'attr' => array(
                    'id' => '_apellido1',
                    'name' => '_apellido1'
                )
            ))
            ->add ('apellido2', TextType::class,array(
                'attr' => array(
                    'id' => '_apellido2',
                    'name' => '_apellido2'
                )
            ))
            ->add ('fechaNacimiento', TextType::class,array(
                'attr' => array(
                    'id' => '_fechaNacimiento',
                    'name' => '_fechaNacimiento'
                )
            ))
            ->add ('telefono', TextType::class,array(
                'attr' => array(
                    'id' => '_telefono',
                    'name' => '_telefono'
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
