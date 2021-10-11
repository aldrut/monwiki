<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\ChoiceList\Factory\Cache\ChoiceAttr;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class NewslettersFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            
            ->add('mail')
            ->add('role', ChoiceType::class, [
                
                'choices'=>
                        ['Administrateur'=> 'ROLE_ADMIN',
                        'Utilisateur'=> 'ROLE_USER',
                        'Moderateur'=> "ROLE_MODO"],
               
                
            ])
            
          
            ->add('Sauvegarder' ,SubmitType::class,['attr'=> ['class'=> 'btn btn-outline-primary']]);
        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
