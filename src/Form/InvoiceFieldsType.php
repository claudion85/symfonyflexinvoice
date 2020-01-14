<?php

namespace App\Form;

use App\Entity\InvoiceFields;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InvoiceFieldsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('description',null,[
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
            ->add('quantity',null,[
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
            ->add('amount',null,[
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
            ->add('amount_vat',null,[
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
            ->add('amount_total',null,[
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => InvoiceFields::class,
        ]);
    }
}
