<?php

namespace Wbi\ForumBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('postTitle')
            ->add('postAutheur')
            ->add('postContent')
            ->add('postDate')
            ->add('userId')
            ->add('underDomaine')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Wbi\ForumBundle\Entity\Posts'
        ));
    }

    public function getName()
    {
        return 'wbi_forumbundle_poststype';
    }
}
