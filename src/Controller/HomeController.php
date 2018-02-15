<?php
namespace App\Controller;

use App\Entity\Crente;
use App\Entity\Despesa;
use App\Entity\Dizimo;
use App\Entity\Entrada;
use App\Entity\Oferta;
use App\Entity\Saida;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller {



    function __construct()
    {

    }


    public function index(){



        $total=$this->getDoctrine()->getRepository(Crente::class)->count();
        $totalBatizado=$this->getDoctrine()->getRepository(Crente::class)->countBatizado(TRUE);
        $totalNotBatizado=$this->getDoctrine()->getRepository(Crente::class)->countBatizado(false);
        //generos
        $totalMulherBatizado=$this->getDoctrine()->getRepository(Crente::class)->countGeneroBatizado('Femenino',TRUE);
        $totalHomemBatizado=$this->getDoctrine()->getRepository(Crente::class)->countGeneroBatizado('Masculino',TRUE);

        $totalMulherNBatizado=$this->getDoctrine()->getRepository(Crente::class)->countGeneroBatizado('Femenino',false);
        $totalHomemNBatizado=$this->getDoctrine()->getRepository(Crente::class)->countGeneroBatizado('Masculino',false);



        return $this->render('home/dashboard.html.twig',array(
            'total'=>$total,
            'totalBatizado'=>$totalBatizado,
            'totalNotBatizado'=>$totalNotBatizado,
            'totalMulherBatizado'=>$totalMulherBatizado,
            'totalHomemBatizado'=>$totalHomemBatizado,
            'totalMulherNBatizado'=>$totalMulherNBatizado,
            'totalHomemNBatizado'=>$totalHomemNBatizado,




        ));

    }


    public function caixa(){

        $totalDizimo=$this->getDoctrine()->getRepository(Dizimo::class)->countValorPrintedForDizimo();
        $totalOferta=$this->getDoctrine()->getRepository(Oferta::class)->countValorPrintedForOferta();
        $totalSaida=$this->getDoctrine()->getRepository(Saida::class)->countValorPrintedForSaida();
        $totalDespesa=$this->getDoctrine()->getRepository(Despesa::class)->countValorPrintedForDespesa();
        $totalEntrada=$this->getDoctrine()->getRepository(Entrada::class)->countValorPrintedForEntrada();

        $saldo=($totalDizimo+$totalOferta+$totalEntrada) - ($totalDespesa+$totalSaida);
        return $this->render('home/caixa.html.twig',
            array(

                'totalDizimo'=>$totalDizimo,
                'totalOferta'=>$totalOferta,
                'totalSaida'=>$totalSaida,
                'totalDespesa'=>$totalDespesa,
                'totalEntrada'=>$totalEntrada,
                'saldo'=>$saldo
            ));
    }

    public function relatorio(){

        return $this->render('relatorio/menu.html.twig');
    }
}


?>