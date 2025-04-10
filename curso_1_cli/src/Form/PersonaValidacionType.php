<?php

namespace App\Form;

use App\Entity\PersonaEntityValidacion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonaValidacionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre', TextType::class)
            ->add('correo', TextType::class)
            ->add('telefono', TextType::class)
            ->add('pais', ChoiceType::class, [
                'choices'=>[
                    'Seleccione..'=>0,
                    'Chile'=>1,
                    'Peru'=>2,
                    'México'=>3,
                    'España'=>4,
                    'Bolivia'=>5,
                    'Venezuela'=>6,
                    'Costa Rica'=>7,
                    'Noruega'=>8
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class'=>PersonaEntityValidacion::class,
            'csrf_protection' => true,
            'csrf_field_name' =>'_token',
        ]);
    }
}
