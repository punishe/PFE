<?php

namespace App\Form;

use App\Entity\Hotel;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\AbstractType;    
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



class PropertyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom_hotel')
            ->add('id')
            ->add('description')
            ->add('categorie', null , [
                'label' => 'Nombre d etoiles' 
            ])
            ->add('ville')
            ->add('prix_LPDStandart', null , [
                'label' => 'Prix logement Petit Dejeuner LPD' 
            ])
            ->add('prix_PDstandart', null , [
                'label' => 'Prix logement Demi Pension DP' 
            ])
            ->add('prix_PCstandart', null , [
                'label' => 'Prix logement  Pension complette PC' 
            ])
            ->add('prix_AllISOFTstandart', null , [
                'label' => 'Prix logement All In Soft ' 
            ])
            ->add('imageFile', FileType::class, [
                'required' => false
            ])
         
  
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Hotel::class,
        ]);
    }
}
