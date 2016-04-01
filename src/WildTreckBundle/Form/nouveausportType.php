<?php
namespace WildTreckBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class nouveausportType extends AbstractType
    {
/**
* @param FormBuilderInterface $builder
* @param array $options
*/
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sport')
    ;

    }

    public function getName()
    {
    return 'WildTreckBundle_nouveausportType';
    }

/**
* @param OptionsResolver $resolver
*/
    public function configureOptions(OptionsResolver $resolver)
    {
    $resolver->setDefaults(array(
'data_class' => 'WildTreckBundle\Entity\Sport'
    ));
    }
}

