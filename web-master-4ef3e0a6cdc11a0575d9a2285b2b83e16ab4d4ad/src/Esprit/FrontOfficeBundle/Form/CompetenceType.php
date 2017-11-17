<?php

namespace Esprit\FrontOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CompetenceType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('libelleCompetence')
                ->add('categorie', 'choice', array('choices' => array(
                        'ART' => 'Art',
                        'SCIENCE' => 'Science',
                        'INFORMATIQUE' => 'Informatique',
                        'GESTION' => 'Gestion',
                        'MUSIQUE' => 'Musique',
                        'ECONOMIE' => 'Economie',
                        'SOCIOLOGIE' => 'Sociologie',
                        'AUTRES' => 'Autres'
            )))
                ->add('enregistrer', 'submit');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\FrontOfficeBundle\Entity\Competence'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'esprit_frontofficebundle_gcompetence';
    }

}
