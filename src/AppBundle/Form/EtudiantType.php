<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class EtudiantType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array('label' => 'Nom de l\'étudiant:', 'required' => true, 'attr' => array('class' => 'form-control')))
            ->add('prenom',TextType::class, array('label' => 'Prénom(s) de l\'étudiant:', 'required' => true, 'attr' => array('class' => 'form-control')))
            ->add('dateExamen', TextType::class, array('label' => 'Date de naissance:', 'required' => true, 'attr' => array('class' => 'form-control')))
            ->add('lieunaissance',TextType::class, array('label' => 'Lieu de naissance:', 'required' => true, 'attr' => array('class' => 'form-control')))
            ->add('mention', TextType::class, array('label' => 'Matricule:', 'required' => true, 'attr' => array('class' => 'form-control')))
            ->add('optionEtud', TextType::class, array('label' => 'Option:', 'required' => true, 'attr' => array('class' => 'form-control')))
            ->add('genre', TextType::class, array('label' => 'Titre du diplôme:', 'required' => true, 'attr' => array('class' => 'form-control', 'placeholder' => 'Ex: LICENCE PROFESSIONNELLE')))
            ->add('specialite', TextType::class, array('label' => 'Diplôme:', 'required' => true, 'attr' => array('class' => 'form-control')));

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Etudiant'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_etudiant';
    }


}
