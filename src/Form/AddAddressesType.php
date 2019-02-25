<?php

namespace App\Form;

use App\Entity\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddAddressesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('number')
            ->add('type')
            ->add('street')
            ->add('city')
            ->add('cp')
            ->add('country')
            ->add('additional')
            ->add('title')
            ->add('firstname')
            ->add('lastname')
            ->add('users')
            ->add('user_id')
            ->add('command_facturation_id')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Address::class,
        ]);
    }
}
