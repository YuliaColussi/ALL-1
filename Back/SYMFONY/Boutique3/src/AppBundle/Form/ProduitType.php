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
use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Component\Validator\Constraints as Assert;

class ProduitType extends AbstractType //abstract waits us to change some functions inside
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('reference', TextType::class, array(
                    'required' => false,
                    'constraints' => array(
                        new Assert\NotBlank(array(
                            'message' => 'Attention veeulliez reseignee ce champ'
                        )),
                        new Assert\Length(array(
                            'min' => '3', 'minMessage' => 'Attention veuliiez renseigner au moins 3 caracteres',
                            'max' => '20', 'minMessage' => 'Attention veuliiez renseigner maximum 20 caracteres'
                        )),
                        new Assert\Regex(array(
                            'pattern' => '/^[a-zA-Z-_0-9]+$/',
                            'message' => 'Veuillez utiliser le lettrres A à Z et les chiffres 0 à 9',

                        ))

                    )

        ))
        ->add('categorie', TextType::class, array(

            'required' => false,
        ))

        ->add('titre', TextType::class, array(

            'required' => false,
        ))
        ->add('description', TextareaType::class, array(

            'required' => false,
        ))
        ->add('couleur', TextType::class, array(

            'required' => false,
        ))
        ->add('taille', ChoiceType::class, array(
                'choices' => array(
                        'XS' => 'xs',
                        'S' => 's',
                        'M' => 'm',
                        'X' => 'x',
                        'XL' => 'xl',
                        'XXL' => 'xxl'
                )
        ))
        ->add('public', ChoiceType::class, array(
                'choices' => array(
                    'Homme' => 'm',
                    'Femme' => 'f',
                    'Homme et femme' => 'mixte'

                )

        ))

        ->add('file', FileType::class, array (
            'required' => false,
        ))


        ->add('prix', MoneyType::class)
        ->add('stock', IntegerType::class, array(

            'required' => false,
            'constraints' => array(
                        new Assert\Type(array(
                            'type' => 'integer',
                            'message' => 'Veulliez renseigner un chiffre'
                        )),
                    ),
                    'attr' => array(
                        'placeholder' => 'Ex : 125',
                        'class' => 'form-control',
                    )

        ))
        ->add('Enregistrer', SubmitType::class, array(
            'attr' => array(
            'class' => 'btn btn-warning'
            )
        ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Produit'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_produit';
    }


}
