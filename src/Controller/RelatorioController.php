<?php

namespace App\Controller;

use App\Entity\Cargo;
use App\Entity\Crente;
use App\Entity\Despesa;
use App\Entity\Dizimo;
use App\Entity\Funcao;
use App\Entity\Oferta;
use Doctrine\ORM\Query\Expr\Func;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminAutocompleteType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class RelatorioController extends Controller
{


    public function index()
    {

        return $this->render('relatorio/menu.html.twig');

    }

    public function membros()
    {

        $membro = $this->getDoctrine()->getRepository(Crente::class)->findAll();
        return $this->report($membro, 'relatorio/membro/template.html.twig');

    }

    public function membrosData(Request $request)
    {


        $form = $this->createFormBuilder()
            ->add('data1', DateTimeType::class, array(
                'placeholder' => array(
                    'year' => 'Ano', 'month' => 'Mes', 'day' => 'Dia',

                )
            ))
            ->add('data2', DateTimeType::class, array(
                'placeholder' => array(
                    'year' => 'Ano', 'month' => 'Mes', 'day' => 'Dia'

                )))
            ->add('save', SubmitType::class, array('label' => 'Imprimir'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data1 = $form->get('data1')->getData();
            $data2 = $form->get('data2')->getData();

            $membro = $this->getDoctrine()->getRepository(Crente::class)->getByDate($data1, $data2);

            return $this->report($membro, 'relatorio/membro/template.html.twig');
        }

        return $this->render('relatorio/membro/form.html.twig', array(
            'form' => $form->createView(),
        ));


    }

    public function membrosBatizado()
    {

        $membro = $this->getDoctrine()->getRepository(Crente::class)->membroBatizado(true);
        return $this->report($membro, 'relatorio/membro/template.html.twig');

    }

    public function membrosCargo(Request $request)
    {

        $crente = new Crente();
        $form = $this->createFormBuilder($crente)
            ->add('cargos', EntityType::class, array('class' => Cargo::class, 'choice_label' => 'nome'))
            ->add('save', SubmitType::class, array('label' => 'Imprimir'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $values = $form->get('cargos')->getData();
            $membro = $this->getDoctrine()
                ->getRepository(Crente::class)->findBy(['cargos' => $values]);
            return $this->report($membro, 'relatorio/membro/template.html.twig');
        }

        return $this->render('relatorio/membro/form.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    public function membrosFuncao(Request $request)
    {

        $crente = new Crente();
        $form = $this->createFormBuilder($crente)
            ->add('funcoes', EntityType::class, array('class' => Funcao::class, 'choice_label' => 'nome'))
            ->add('save', SubmitType::class, array('label' => 'Imprimir'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $values = $form->get('funcoes')->getData();
            $membro = $this->getDoctrine()
                ->getRepository(Crente::class)->findBy(['funcoes' => $values]);
            return $this->report($membro, 'relatorio/membro/template.html.twig');
        }

        return $this->render('relatorio/membro/form.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    public function membrosDizimista()
    {

        $membro = $this->getDoctrine()->getRepository(Crente::class)->membroDizimista(true);
        return $this->report($membro, 'relatorio/membro/template.html.twig');

    }

    public function membrosAniversario()
    {

        $membro = $this->getDoctrine()->getRepository(Crente::class)->membroAniversario();
        return $this->report($membro, 'relatorio/membro/template.html.twig');

    }


    public function despesas(Request $request)
    {


        $form = $this->createFormBuilder()
            ->add('data1', DateTimeType::class, array(
                'placeholder' => array(
                    'year' => 'Ano', 'month' => 'Mes', 'day' => 'Dia',

                )
            ))
            ->add('data2', DateTimeType::class, array(
                'placeholder' => array(
                    'year' => 'Ano', 'month' => 'Mes', 'day' => 'Dia'

                )))
            ->add('save', SubmitType::class, array('label' => 'Imprimir'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data1 = $form->get('data1')->getData();
            $data2 = $form->get('data2')->getData();

            $despesa = $this->getDoctrine()->getRepository(Despesa::class)->getByDate($data1, $data2);

            return $this->report($despesa, 'relatorio/despesa/template.html.twig');
        }

        return $this->render('relatorio/despesa/form.html.twig', array(
            'form' => $form->createView(),
        ));


    }


    public function dizimos(Request $request)
    {


        $form = $this->createFormBuilder()
            ->add('data1', DateTimeType::class, array(
                'placeholder' => array(
                    'year' => 'Ano', 'month' => 'Mes', 'day' => 'Dia',

                )
            ))
            ->add('data2', DateTimeType::class, array(
                'placeholder' => array(
                    'year' => 'Ano', 'month' => 'Mes', 'day' => 'Dia'

                )))
            ->add('save', SubmitType::class, array('label' => 'Imprimir'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data1 = $form->get('data1')->getData();
            $data2 = $form->get('data2')->getData();

            $despesa = $this->getDoctrine()->getRepository(Dizimo::class)->getByDate($data1, $data2);

            return $this->report($despesa, 'relatorio/dizimo/template.html.twig');
        }

        return $this->render('relatorio/dizimo/form.html.twig', array(
            'form' => $form->createView(),
        ));


    }


    public function dizimosMembroData(Request $request)
    {

        $dizimo = new Dizimo();
        $form = $this->createFormBuilder($dizimo)
            ->add('crentes', EasyAdminAutocompleteType::class, array('class' => Crente::class))
            ->add('save', SubmitType::class, array('label' => 'Imprimir'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $crente = $form->get('crentes')->getData();

            $despesa = $this->getDoctrine()->getRepository(Dizimo::class)->findBy(['crentes' => $crente]);

            return $this->report($despesa, 'relatorio/dizimo/template.html.twig');
        }

        return $this->render('relatorio/dizimo/form.html.twig', array(
            'form' => $form->createView(),
        ));


    }



    public function ofertas(Request $request)
    {


        $form = $this->createFormBuilder()
            ->add('data1', DateTimeType::class, array(
                'placeholder' => array(
                    'year' => 'Ano', 'month' => 'Mes', 'day' => 'Dia',

                )
            ))
            ->add('data2', DateTimeType::class, array(
                'placeholder' => array(
                    'year' => 'Ano', 'month' => 'Mes', 'day' => 'Dia'

                )))
            ->add('save', SubmitType::class, array('label' => 'Imprimir'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data1 = $form->get('data1')->getData();
            $data2 = $form->get('data2')->getData();

            $oferta = $this->getDoctrine()->getRepository(Oferta::class)->getByDate($data1, $data2);

            return $this->report($oferta, 'relatorio/oferta/template.html.twig');
        }

        return $this->render('relatorio/oferta/form.html.twig', array(
            'form' => $form->createView(),
        ));


    }


    public function imprimirCardAction($id){

        $membro = $this->getDoctrine()->getRepository(Crente::class)->findOneBy(['id'=>$id]);
        return $this->imageReport($membro, 'relatorio/membro/cartao.html.twig');

    }



    public function report($data, $view)
    {

        $pathPublic = $this->get('kernel')->getProjectDir() . '/public/';
        $path = $this->get('kernel')->getProjectDir() . '/public/report/';
        $output = $path . time() . 'relatorio.pdf';
        $html = $this->renderView($view, array(
            'data' => $data,
            'path' => $pathPublic
        ));
        $header = $this->renderView('relatorio/header.html.twig', array(
            'path' => $pathPublic
        ));
        $footer = $this->renderView('relatorio/footer.html.twig', array(
            'customer' => "Sam"
        ));


        $this->get('knp_snappy.pdf')->generateFromHtml($html, $output, array(
            'header-html' => $header,
            'footer-html' => $footer,
        ));
        return $this->file($output, null, ResponseHeaderBag::DISPOSITION_INLINE);
    }


    public function imageReport($data,$view)
    {
        $pathPublic = $this->get('kernel')->getProjectDir() . '/public';
        $path = $this->get('kernel')->getProjectDir() . '/public/report/imagens/';
        $output = $path . time() . 'image.jpg';
        $html = $this->renderView($view, array(
            'data' => $data,
            'path' => $pathPublic
        ));
        $this->get('knp_snappy.image')->generateFromHtml($html, $output);
        return $this->file($output, null, ResponseHeaderBag::DISPOSITION_INLINE);
    }


}


?>