<?php

namespace App\Form;

use App\Entity\Invoice;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use App\Entity\InvoiceFields;

class InvoiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('invoice_date',DateType::class,[
                'attr'=>[
                    'class'=>'form-control'
                ],
                'widget'=>'single_text'
            ])
            ->add('invoice_number',null,[
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
            ->add('client_id',null,[
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
            ->add('fields',CollectionType::class,[
                'entry_type'=>InvoiceFieldsType::class,
                'allow_add'=>true,
                'allow_delete'=>true,
                'prototype'=>true,
                'label'=>false,
                'by_reference' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Invoice::class,
        ]);
    }
}
