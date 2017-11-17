<?php

namespace Esprit\FrontOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProblemeType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('titre')
                ->add('description', 'textarea')
                ->add('type', 'choice', array('choices' => array(
                    'ART' => 'ART', 
                    'Technologie' => 'Technologie',
                    'IT' => 'IT',
            )))
                
                
                ->add('idUtilisateur', 'entity', array(
                    'class' => 'EspritFrontOfficeBundle:User',
                    'property' => 'username',
                    'label' => 'postedBy'))
                ->add('valider', 'submit')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\FrontOfficeBundle\Entity\Probleme'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'esprit_applicationbundle_probleme';
    }

}
