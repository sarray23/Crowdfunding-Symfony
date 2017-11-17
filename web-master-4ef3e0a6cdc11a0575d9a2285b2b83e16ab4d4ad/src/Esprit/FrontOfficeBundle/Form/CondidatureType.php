<?php

namespace Esprit\ApplicationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CondidatureType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('note')
            ->add('dateCondidature')
            ->add('dateCloture')
            ->add('idExpert')
            ->add('idIdee')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\ApplicationBundle\Entity\Condidature'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'esprit_applicationbundle_condidature';
    }
}
