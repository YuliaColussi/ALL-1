<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

use Symfony\Component\Validator\Constraints as Assert;

class MembreType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('codepostal', IntegerType::class, array (
            // 'required' => false,
            // 'constraints' => array(
            //     new Assert\NotBlank(array(
            //          'message' => 'Attention veulliez reseignee ce champ'
            //     ))
            // )
        ))
        ->add('username', TextType::class, array (
            'required' => false,
            'constraints' => array(
                new Assert\NotBlank(array(
                     'message' => 'Attention veulliez reseignee ce champ'
                ))
            )
        ))
        ->add('nom', TextType::class, array (
            'required' => false,
            'constraints' => array(
                new Assert\NotBlank(array(
                     'message' => 'Attention veeulliez reseignee ce champ'
                ))
            )
        ))
        ->add('prenom', TextType::class, array (
            // 'required' => false,
            // 'constraints' => array(
            //     new Assert\NotBlank(array(
            //          'message' => 'Attention veeulliez reseignee ce champ'
            //     ))
            // )
        ))
        ->add('email', EmailType::class, array (
            // 'required' => false,
            // 'constraints' => array(
            //     new Assert\NotBlank(array(
            //          'message' => 'Attention veeulliez reseignee ce champ'
            //     ))
            // )
        ))
        ->add('civilite', ChoiceType::class, array (
                    'choices' => array(
                    'Homme' => 'm',
                    'Femme' => 'f',
                    'Homme et femme' => 'mixte'

                )
            // 'required' => false,
            // 'constraints' => array(
            //     new Assert\NotBlank(array(
            //          'message' => 'Attention veeulliez reseignee ce champ'
            //     ))
            // )
        ))
        ->add('ville', TextType::class, array (
            // 'required' => false,
            // 'constraints' => array(
            //     new Assert\NotBlank(array(
            //          'message' => 'Attention veeulliez reseignee ce champ'
            //     ))
            // )
        ))
        ->add('adresse', TextareaType::class, array (
            // 'required' => false,
            // 'constraints' => array(
            //     new Assert\NotBlank(array(
            //          'message' => 'Attention veeulliez reseignee ce champ'
            //     ))
            // )
        ))

        ->add('password', PasswordType::class, array (
            'required' => false
            // 'required' => false,
            // 'constraints' => array(
            //     new Assert\NotBlank(array(
            //          'message' => 'Attention veeulliez reseignee ce champ'
            //     ))
            // )
        ))
        ->add('Inscription', SubmitType::class, array (
            // 'required' => false,
            // 'constraints' => array(
            //     new Assert\NotBlank(array(
            //          'message' => 'Attention veeulliez reseignee ce champ'
            //     ))
            // )
                ));
                if(!empty($options) && $options['statut'] == 'admin') {

                    $builder
                        ->add('roles');
                }
                else {
                    $builder
                    -> add ('password', PasswordType::class, array (
                        'required' => false
                    ));
                }
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Membre',


            'statut' => 'user'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_membre';
    }

}
