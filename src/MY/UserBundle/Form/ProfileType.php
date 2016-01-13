<?php

namespace MY\UserBundle\Form;

use FOS\UserBundle\Form\Type\ProfileFormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProfileType extends ProfileFormType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /*
        $builder
            ->add('gender', 'choice', array(
                'label' => 'profile.fields.gender',
                'translation_domain' => 'forms',
                'choices' => array(
                    'm' => 'M.',
                    'f' => 'Mme'
                )
            ))
            ->add('firstname', 'text', array(
                'label' => 'profile.fields.firstname',
                'translation_domain' => 'forms'
            ))
        ;
        */
    }

    public function setDefaultOption(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'validation_groups' => array('Default', 'Account')
        ));
    }

    public function getName()
    {
        return 'my_fos_user_profile';
    }
} 