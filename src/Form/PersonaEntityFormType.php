<?php

namespace App\Form;

use App\Entity\PersonaEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PersonaEntityFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre', TextType::class, ['label'=>'Nombre'])
            ->add('correo', TextType::class, ['label'=>'E-Mail'])
            ->add('telefono', TextType::class, ['label'=>'Teléfono'])
            ->add('pais', ChoiceType::class, [
                'choices'=>[
                    'Chile'=>1,
                    'Peru'=>2,
                    'México'=>3,
                    'España'=>4,
                    'Bolivia'=>5,
                    'Venezuela'=>6,
                    'Costa Rica'=>7,
                    'Noruega'=>8
                ],
                'placeholder'=> 'Seleccione.....'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            $resolver->setDefaults([
                'data_class'=>PersonaEntity::class,
                'csrf_protection' => true,
                'csrf_field_name' =>'_token',
            ])
        ]);
    }
}
