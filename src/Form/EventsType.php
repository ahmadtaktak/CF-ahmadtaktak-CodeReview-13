<?php

namespace App\Form;

use App\Entity\Events;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EventsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
           ->add('image', null,array('attr'=>array("class"=>'form-control mb-3')))
            ->add("name", null,array('attr'=>array("class"=>'form-control mb-3')))
            ->add('type_event',ChoiceType::class, array("choices" =>array("sport"=>"sport", "music"=>"m
            usic", "theater"=>"theater","movie"=>"movie"),'attr'=>array("class"=>'form-control mb-3')))
            ->add('createdAt', null,array('attr'=>array("class"=>'form-control mb-3')))
            ->add('capascity', null,array('attr'=>array("class"=>'form-control mb-3')))
            ->add('email', null,array('attr'=>array("class"=>'form-control mb-3')))
            ->add('phone', null,array('attr'=>array("class"=>'form-control mb-3')))
            ->add('address', null,array('attr'=>array("class"=>'form-control mb-3')))
            ->add('url', null,array('attr'=>array("class"=>'form-control mb-3')))
            ->add('description', null,array('attr'=>array("class"=>'form-control mb-3')))
          
        ;
    }
    

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Events::class,
        ]);
    }
}
