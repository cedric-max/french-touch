<?php

namespace App\Form;

use App\Entity\User;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Event\SubmitEvent;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname',\Symfony\Component\Form\Extension\Core\Type\TextType::class,[
                'label' => 'Votre prénom',
                'attr' => [
                    'placeholder' => 'Merci de saisir votre prénom '
                ]
            ])
            ->add('lastname',\Symfony\Component\Form\Extension\Core\Type\TextType::class,[
                'label' => 'Votre nom',
                'attr' => [
                    'placeholder' => 'Merci de saisir votre nom'
                ]
            ])
            ->add('email',\Symfony\Component\Form\Extension\Core\Type\EmailType::class,[
                'label' => 'Votre e-mail',
                'attr' => [
                    'placeholder' => 'xxxxx@xxx.xx'
                ]
            ])
            ->add('password',\Symfony\Component\Form\Extension\Core\Type\PasswordType::class,[
                'label' => 'Votre mot de pass',
                'attr' => [
                    'placeholder' => 'Merci de saisir votre mot de passe'
                ]
            ])
            ->add('password_confirm',\Symfony\Component\Form\Extension\Core\Type\PasswordType::class,[
                'label' => 'Confirmer votre mot de passe',
                'mapped' => false,
                'attr' => [
                    'placeholder' => 'Merci de confirmer votre mot de passe'
                ]
            ])

            ->add('submit', SubmitType::class, [
                'label' => "S'inscrire"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
