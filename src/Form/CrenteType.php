<?php

namespace App\Form;

use App\Entity\Crente;
use Doctrine\DBAL\Types\BooleanType;
use function PHPSTORM_META\type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;



class CrenteType extends AbstractType
{
/*    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome',TextType::class,array('label'=>'Nome Completo','required'=>true,'attr'=>['class'=>'form-control']))
            ->add('idade',IntegerType::class, array('label'=> 'Idade', 'attr' => array('class' => 'form-control')))
            ->add('profissao',TextType::class,array('label'=> 'Profissao', 'attr' => array('class' => 'form-control')))
            ->add('numeroDeFilhos',IntegerType::class,array('label'=> 'Numero de Filhos', 'attr' => array('class' => 'form-control')))
            ->add('nomeMulher',TextType::class,array('label'=> 'Nome da Esposa', 'attr' => array('class' => 'form-control')))
            ->add('endereco',TextType::class,array('label'=> 'Endereço', 'attr' => array('class' => 'form-control')))

            ->add('estadoCivil',ChoiceType::class,
                array('choices'
                =>array(
                        'Solteiro'=>null,
                        'Casado'=>null,


            )))
            ->add('grauAcademico',ChoiceType::class,
                array('choices'
                =>array(
                        'Nenhum' => 'Nenhum',
                        'Fundamental'=>null,
                        'Médio'=>null,
                        'Superior'=>null,
                    )))
            ->add('batizado',ChoiceType::class,
                array('choices'
                =>array(
                        'Não'=>null,
                        'Sim'=>null,
                    )))
            ->add('cargoIgreja',ChoiceType::class,
                array('choices'
                =>array(

                        'Pastor'=>null,
                        'Diaconisa'=>null)))
            ->add('salvar', SubmitType::class)

            ->getForm();

        }*/


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome',TextType::class,array('label'=>'Nome Completo','required'=>true,'attr'=>['class'=>'form-control']))
            ->add('idade',IntegerType::class, array('label'=> 'Idade', 'attr' => array('class' => 'form-control')))
            ->add('profissao',TextType::class,array('label'=> 'Profissao', 'attr' => array('class' => 'form-control')))
            ->add('numeroDeFilhos',IntegerType::class,array('label'=> 'Numero de Filhos', 'attr' => array('class' => 'form-control')))
            ->add('nomeMulher',TextType::class,array('label'=> 'Nome da Esposa', 'attr' => array('class' => 'form-control')))
            ->add('endereco',TextType::class,array('label'=> 'Endereço', 'attr' => array('class' => 'form-control')))

            ->add('estadoCivil',ChoiceType::class,
                array('choices'
                =>array(
                        'Solteiro'=>'Solteiro',
                        'Casado'=>'Solteiro',


                    ),'label'=>'Estado Civil'))

            ->add('dizimista',ChoiceType::class,
                array('choices'
                =>array(
                        'Não'=>'Sim',
                        'Sim'=>'Não',


                    ),'label'=>'Dizimista?'))
            ->add('grauAcademico',ChoiceType::class,
                array('choices'
                =>array(
                        'Nenhum' => 'Nenhum',
                        'Fundamental'=>'Fundamental',
                        'Médio'=>'Médio',
                        'Superior'=>'Superior',
                    )))
            ->add('batizado',ChoiceType::class,
                array('choices'
                =>array(
                        'Não'=>'Não',
                        'Sim'=>'Sim',
                    )))
            ->add('cargoIgreja',ChoiceType::class,
                array('choices'
                =>array(
                        'Nenhum' => 'Nenhum',
                        'Pastor'=>'Pastor',
                        'Diaconisa'=>'Diaconisa')))
            ->add('salvar', SubmitType::class)

            ->getForm();

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // uncomment if you want to bind to a class
            'data_class' => Crente::class,
        ]);
    }


}


