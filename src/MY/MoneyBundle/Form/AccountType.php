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

        // On ajoute une fonction qui va écouter l'évènement PRE_SET_DATA
/*        
        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function(FormEvent $event) {
                // On récupère notre objet Advert sous-jacent
                $account = $event->getData();

                if (null === $account) {
                    return;
                }

                if (!$account->getEnabled() || null === $account->getId()) {
                    $event->getForm()->add('enabled', 'checkbox', array('required' => false));
                } else {
                    $event->getForm()->remove('enabled');
                }
            }
        );
*/        
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
