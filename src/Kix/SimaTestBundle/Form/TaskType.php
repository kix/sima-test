<?php

namespace Kix\SimaTestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('addedOn')
            ->add('completedOn')
            ->add('dueOn')
            ->add('description')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Kix\SimaTestBundle\Entity\Task'
        ));
    }

    public function getName()
    {
        return 'kix_simatestbundle_tasktype';
    }
}
