<?php

namespace Esprit\FrontOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class IdeeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('type','choice', array( 
                    'choices' => array(
                                       'Musique' => 'Musique',
                                       'Technologie' => 'Technologie',
                                       'Sports' => 'Sports',
                                       'Photographie' => 'Photographie',
                                       'Santé' => 'Santé',
                                       'Culture' => 'Culture',
                                       'Affaires' => 'Affaires',
                                       'Fashion' => 'Fashion',
                                       'Autre' => 'Autre'
                                       ),
                    'multiple' => false, 'expanded' => false, 
                    'required' => true ))
            ->add('file')
            

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\FrontOfficeBundle\Entity\Idee'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'esprit_applicationbundle_idee';
    }
}
