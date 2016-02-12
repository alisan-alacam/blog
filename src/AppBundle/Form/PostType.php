<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null, array(
                'attr' => array('autofocus' => true),
                'label' => 'Başlık',
            ))
            ->add('summary', 'Symfony\Component\Form\Extension\Core\Type\TextareaType', array('label' => 'Özet'))
            ->add('content', null, array(
                'label' => 'İçerik',
                'attr' => array('rows' => 18)
            ))
            ->add('authorEmail', null, array('label' => 'Eposta'))
            ->add('publishedAt', 'AppBundle\Form\Type\DateTimePickerType', array(
                'label' => 'Yayın Tarihi',
                'format' => 'dd.MM.yyyy HH:mm',
                'attr' => array('data-toggle' => 'datetimepicker')
            ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Post',
        ));
    }
}