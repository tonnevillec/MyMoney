<?php

namespace MY\MoneyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AccountType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',         'text')
            ->add('number',       'text')
            ->add('total',        'number')
            ->add('banks',        'entity', array(
                'class'         => 'MYMoneyBundle:Bank',
                'choice_label'  => 'name',
                'multiple'      => false,
                'expanded'      => false
                ))
            ->add('enabled',      'checkbox', array(
                'required'      => false
                ))
            ->add('save',         'submit', array(
                'label'         => 'Valider'
                ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MY\MoneyBundle\Entity\Account'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'my_moneybundle_account';
    }
}
