<?php
namespace App\Controller;

use App\Entity\Crente;
use APY\DataGridBundle\Grid\Source\Entity;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use APY\DataGridBundle\Grid\Mapping as GRID;

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



        return $this->render('easy_admin/dashboard.html.twig',array(
            'total'=>$total,
            'totalBatizado'=>$totalBatizado,
            'totalNotBatizado'=>$totalNotBatizado,
            'totalMulherBatizado'=>$totalMulherBatizado,
            'totalHomemBatizado'=>$totalHomemBatizado,
            'totalMulherNBatizado'=>$totalMulherNBatizado,
            'totalHomemNBatizado'=>$totalHomemNBatizado,




        ));

    }
}


?>