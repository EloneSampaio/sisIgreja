<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 25/01/18
 * Time: 22:09
 */

namespace App\Service;


use Doctrine\ORM\QueryBuilder;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\StreamedResponse;

class CsvExporter
{


    /**
     * @param QueryBuilder $queryBuilder
     * @param $columns
     * @param $filename
     * @param $entity
     */
    public function getResponseFromQueryBuilder(QueryBuilder $queryBuilder, $filename, $excel)
    {
        $results = new ArrayCollection($queryBuilder->getQuery()->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY));
        /* $response = new StreamedResponse();
         if (is_string($columns)) {
             $columns = $this->getColumnsForEntity($columns,$entity);

         }
         $response->setCallback(function () use ($entities, $columns) {
             $handle = fopen('php://output', 'w+');
             // Add header

             fputcsv($handle, array_keys($columns));
             while ($entity = $entities->current()) {
                 $values = [];
                 foreach ($columns as $column => $callback) {
                     $value = $callback;
                     if (is_callable($callback)) {
                         $value = $callback($entity);
                     }
                     $values[] = $value;
                 }
                 fputcsv($handle, $values);
                 $entities->next();
             }
             fclose($handle);
         });
         $response->headers->set('Content-Type', 'text/csv; charset=utf-8');
         $response->headers->set('Content-Disposition', 'attachment; filename="' . $filename . '"');

         return $response;*/


       $excelFile= $excel->createPHPExcelObject();
        $excelFile->getProperties()
            ->setTitle('Membro Report');
        $i = 2;
        $excelFile->setActiveSheetIndex(0);
        $excelFile->getActiveSheet()->setTitle('Lista de '.$filename)
            ->setCellValue('A1', 'Lista de '.$filename)
            ->mergeCells('A1:G1')
            ->setCellValue('A' . $i, 'Nome')
            ->setCellValue('B' . $i, 'Idade')
            ->setCellValue('C' . $i, 'Endereço')
            ->setCellValue('D' . $i, 'Profissão');



        $i = 3;

        $excelFile->setActiveSheetIndex(0);

        foreach ($results as $result) {


            $excelFile->getActiveSheet()
                ->setCellValue('A' . $i, $result['nome'])
                ->setCellValue('B' . $i, $result['idade'])
                ->setCellValue('C' . $i, $result['endereco'])
                ->setCellValue('D' . $i, $result['profissao']);
            /*->setCellValue('E'.$i, $results['dimensions'])
            ->setCellValue('F'.$i, $results['qty']);*/
            $i++;

        }



        $writer = $excel->createWriter($excelFile, 'Excel5');

// create the response
        $response = $excel->createStreamedResponse($writer);
        // adding headers
        $dispositionHeader = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $filename.'.xls'
        );
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        $response->headers->set('Content-Disposition', $dispositionHeader);

        return $response;

    }

    private function getColumnsForEntity($class, $entity)
    {
        $em = $entity;

        return $em->getClassMetadata($class)->getColumnNames();

    }

}