<?php

namespace App\Form;


use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class ChangePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
       /* $builder
            ->add('email', EmailType::class, [
                'disabled' => true,
                'label' => 'Mon email'
            ])
            ->add('firstname', TextType::class, [
                'disabled' => true,
                'label' => 'Mon Prénom'
            ])
            ->add('lastname', TextType::class, [
                'disabled' => true,
                'label' => 'Mon Nom de famille'
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Mon mot de passe actuel',
                'attr' => [
                    'placeholder' => 'Veulliez saisir votre mot de passe actuel'
                ]
            ])
        >add('new_password', RepeatedType::class, [
            'type' => PasswordType::class,
            'mapped' => false,
            'constraints' => new Length(['min'=> 2,'max' => 60]),
            'invalid_message' => 'Le mot de passe et la confirmation doit être identique',
            'required' => true,
            'label' => 'Mon nouveau mot de passe',
            'first_options' => ['label' => 'Renseigner votre nouvea mot de passe',
                'attr' => [
                    'placeholder' => 'Merci de renseigner votre nouveau mot de passe'
                ]
            ],
            'second_options' => ['label' => 'Confirmer votre nouveau mot de passe',
                'attr' => [
                    'placeholder' => 'Merci de confirmer votre nouveau mot de passe'
                ]
            ],
        ]);*/
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
