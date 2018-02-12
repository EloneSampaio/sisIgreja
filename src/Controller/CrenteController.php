<?php

namespace App\Controller;

use App\Entity\Crente;
use App\Service\CsvExporter;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

use JasperPHP\JasperPHP;




class CrenteController extends AdminController
{

    public function __construct(CsvExporter $csvExporter)
    {
        $this->csvExporter = $csvExporter;
    }



    /**
     * Reporna um array com os parametros de conexão
     * @return Array
     */
    public function getDatabaseConfig()
    {
        $path=$this->get('kernel')->getProjectDir();
        return [
            'driver'   => "mysql",
            'host'     => "localhost",
            'port'     => "3306",
            'username' => "admin",
            'password' => "admin",
            'database' => "sisIgreja",
            'jdbc_dir' => $path. '/vendor/lavela/phpjasper/src/JasperStarter/jdbc'
        ];
    }

    public function imprimirCardAction($id){

        $path=$this->get('kernel')->getProjectDir();
        // coloca na variavel o caminho do novo relatório que será gerado
        $output =$path . '/public/report/' . time() . 'membro';
// instancia um novo objeto JasperPHP

        $report = new JasperPHP;
// chama o método que irá gerar o relatório
        // passamos por parametro:
        // o arquivo do relatório com seu caminho completo
        // o nome do arquivo que será gerado
        // o tipo de saída
        // parametros ( nesse caso não tem nenhum)$this->get('kernel')->getProjectDir()

        $report->process(
            $path . '/public/report/card.jrxml',
            $output,
            ['pptx'],
            array('ID'=>$id),
            $this->getDatabaseConfig()

        )->execute();
        $file = $output . '.pptx';
        $path = $file;

        // caso o arquivo não tenha sido gerado retorno um erro 404
        if (!file_exists($file)) {
            $this->redirectToBackendHomepage();
        }
//caso tenha sido gerado pego o conteudo
        // $file = file_get_contents($file);
//deleto o arquivo gerado, pois iremos mandar o conteudo para o navegador
        //unlink($file);
// retornamos o conteudo para o navegador que íra abrir o PDF
        return $this->file($file, ResponseHeaderBag::DISPOSITION_INLINE);

    }

    public function exportAction(){

        $em = $this->getDoctrine()->getManager();

        $sortDirection = $this->request->query->get('sortDirection');
        if (empty($sortDirection) || !in_array(strtoupper($sortDirection), ['ASC', 'DESC'])) {
            $sortDirection = 'DESC';
        }

        $queryBuilder = $this->createListQueryBuilder(
            $this->entity['class'],
            $sortDirection,
            $this->request->query->get('sortField'),
            $this->entity['list']['dql_filter']
        );

        return $this->csvExporter->getResponseFromQueryBuilder(
            $queryBuilder,
            'membro',
            $excel = $this->get('phpexcel')

        );

        // ask the service for a excel object

    }


    public function cardAction(Request $request){

        $filter=$request->query->getAlnum('busca');

        $crente = $this->getDoctrine()
            ->getManager()
            ->getRepository(Crente::class)
            ->findByLimite();

        if($filter){
            $crente->where('a.nome LIKE :nome')
                ->setParameter('nome', '%'.$filter.'%');
        }
        $query=$crente->getQuery();

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            20/*limit per page*/
        );

        // parameters to template
        return $this->render('crente/list.html.twig', array('pagination' => $pagination));

    }



    public function cardMenuAction(){

        $filter=$this->request->query->getAlnum('busca');

        $crente = $this->getDoctrine()
            ->getManager()
            ->getRepository(Crente::class)
            ->findByLimite();

        if($filter){
            $crente->where('a.nome LIKE :nome')
                ->setParameter('nome', '%'.$filter.'%');
        }
        $query=$crente->getQuery();

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $this->request->query->getInt('page', 1)/*page number*/,
            20/*limit per page*/
        );

        // parameters to template
        return $this->render('crente/list.html.twig', array('pagination' => $pagination));

    }





}
