<?php

namespace Esprit\FrontOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExpertType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
               
                ->add('noteGenerale')
                //->add('nom')
                ->add('competences', 'entity', array('class' => 'EspritFrontOfficeBundle:Competence',
                    'property' => 'libelleCompetence',
                    'multiple' => true,
                    'expanded' => true,
                    'required' => true))
                ->add('valider', 'submit');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\FrontOfficeBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'esprit_frontofficebundle_user';
    }

}
