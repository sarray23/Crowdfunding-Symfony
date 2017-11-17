<?php

namespace Esprit\FrontOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


use Symfony\Component\OptionsResolver\OptionsResolver;

 


class ProjetForm extends AbstractType
{
  

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('budget')
            ->add('duree')
            ->add('type')
                ->add('file','file')
            
            ->add('description','textarea')
           ->add('categorie', 'choice', array('choices' => array('foo' => 'Musique', 'bar' => 'Art', 'baz' => 'Cuisine', 'sport' => 'sport'),
    'preferred_choices' => array('veuillez choisir'),
))
                 //->add('pays')
                ->add('pays', 'choice', array('choices' => array('foo' => 'tunisie', 'bar' => 'france', 'baz' => 'Baz'),
    'preferred_choices' => array('veuillez choisir'),
))
               
           
                
     ->add('valider','submit')
                
               
                
                
                ->add('idUser','entity',array(
         'class'=>'EspritFrontOfficeBundle:User',
         'property'=>'username',
         'label'=>'x'
         ))
                
                


        ;
    }
    
    

    /**
     * @return string
     */
    public function getName()
    {
        return 'esprit_applicationbundle_projet';
    }
}
