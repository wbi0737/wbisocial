<?php

namespace Wbi\ForumBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommentsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('commentAutheur')
            ->add('commentAutheurEmail')
            ->add('commentDate')
            ->add('commentContent')
            ->add('posts')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Wbi\ForumBundle\Entity\Comments'
        ));
    }

    public function getName()
    {
        return 'wbi_forumbundle_commentstype';
    }
}
