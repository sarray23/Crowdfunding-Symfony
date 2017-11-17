<?php
namespace Esprit\BackOfficeBundle\Controller;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Description of StatusticController
 *
 * @author oussama
 */
class StatisticController extends Controller {
    
    
public function chartAction()
{
    
$bdd = $this->get("database_connection");


$resultat = $bdd->fetchColumn("select count(*) from users WHERE enabled='1'");
$resultat2 = $bdd->fetchColumn("select count(*) from users WHERE enabled='0'");
$resultat3 = $bdd->fetchColumn("select count(*) from users WHERE roles!='a:0:{}' ");

    // Chart

   $ob = new Highchart();
$ob->chart->renderTo('piechart');
$ob->title->text('Les utlisateurs par catégories');
$ob->plotOptions->pie(array(
    'allowPointSelect'  => true,
    'cursor'    => 'pointer',
    'dataLabels'    => array('enabled' => false),
    'showInLegend'  => true
));
$data = array(
    array('utilisateus activés', $resultat*1),
    array('utlisateurs admin', $resultat3*1),
    array('utlisateur blockés',$resultat2*1 ),
   
   
);
$ob->series(array(array('type' => 'pie','name' => 'Browser share', 'data' => $data)));

    return $this->render('EspritBackOfficeBundle:Graphs:graphs.html.twig', array(
        'chart' => $ob
    ));
}



public function chart3Action()
{
    
$bdd = $this->get("database_connection");


$resultat1 = $bdd->fetchColumn("SELECT COUNT(*) FROM idee ");
//$resultat2 = $bdd->fetchColumn("select count(distinct(idP)) from Idee ");
//$resultat3 = $bdd->fetchColumn("select count(distinct(type)) from idee");

    // Chart

   $ob = new Highchart();
$ob->chart->renderTo('piechart');
$ob->title->text('Les utlisateurs par catégories');
$ob->plotOptions->pie(array(
    'allowPointSelect'  => true,
    'cursor'    => 'pointer',
    'dataLabels'    => array('enabled' => false),
    'showInLegend'  => true
));
$data = array(
    array('Nombre des idées', $resultat1),
    array('Nombre des porteurs des idées', 1),
    array('Nombre des types des idées',2),
   
   
);
$ob->series(array(array('type' => 'pie','name' => 'Browser share', 'data' => $data)));

    return $this->render('EspritBackOfficeBundle:Graphs:graphs.html.twig', array(
        'chart' => $ob
    ));
}



        
        
        


public function charttAction()
{
    
$bdd = $this->get("database_connection");

$resultat = $bdd->fetchColumn("select count(*) from idee");

$resultat1 = $bdd->fetchColumn("select count(*) from idee where type='Musique'");
$resultat2 = $bdd->fetchColumn("select count(*) from idee where type='Sports'");
$resultat3 = $bdd->fetchColumn("select count(*) from idee where type='Technologie'");
$resultat4 = $bdd->fetchColumn("select count(*) from idee where type='Santé'");
$resultat5 = $bdd->fetchColumn("select count(*) from idee where type='Culture'");
$resultat6 = $bdd->fetchColumn("select count(*) from idee where type='Affaires'");
$resultat7 = $bdd->fetchColumn("select count(*) from idee where type='Photographie'");
$resultat8 = $bdd->fetchColumn("select count(*) from idee where type='Fashion'");
$resultat9 = $bdd->fetchColumn("select count(*) from idee where type='Autre'");

    // Chart

   $ob = new Highchart();
$ob->chart->renderTo('piechart');
$ob->title->text('Nombre des idées par type');
$ob->plotOptions->pie(array(
    'allowPointSelect'  => true,
    'cursor'    => 'pointer',
    'dataLabels'    => array('enabled' => false),
    'showInLegend'  => true
));

$data = array(
    array('Musique', $resultat1*1),
    array('Sports', $resultat2*1),
    array('Technologie',$resultat3*1 ),
    array('Santé', $resultat4*1),
    array('Culture', $resultat5*1),
    array('Affaire', $resultat6*1),
    array('Photographie', $resultat7*1),
    array('Fashion', $resultat8*1),
    array('Autre', $resultat9*1)
);
 

$ob->series(array(array('type' => 'pie','name' => 'Nombre des idées', 'data' => $data)));

    return $this->render('EspritBackOfficeBundle:Graphs:graph_idee.html.twig', array(
        'chart' => $ob
    ));
}





public function chartvotesAction()
{
    
$bdd = $this->get("database_connection");

$resultat1 = $bdd->fetchColumn("select id from rating where id>=10000 and rate= (select max(rate) from rating where id>=10000)");
$resultat2 = $bdd->fetchColumn("select id from rating where id<10000 and rate= (select max(rate) from rating where id<10000)");




    // Chart

   $ob = new Highchart();
$ob->chart->renderTo('piechart');
$ob->title->text('Nombre des idées par type');
$ob->plotOptions->pie(array(
    'allowPointSelect'  => true,
    'cursor'    => 'pointer',
    'dataLabels'    => array('enabled' => false),
    'showInLegend'  => true
));

$data = array(
    array('Musique', $resultat1/10000),
    array('Sports', $resultat2*1)
);
 

$ob->series(array(array('type' => 'pie','name' => 'Nombre des idées', 'data' => $data)));

    return $this->render('EspritBackOfficeBundle:Graphs:graph_idee.html.twig', array(
        'chart' => $ob
    ));
}





    public function barChartAction() {
            
$bdd = $this->get("database_connection");

$resultat1 = $bdd->fetchColumn("select id from rating where id>=10000 and rate= (select max(rate) from rating where id>=10000)");
$resultat2 = $bdd->fetchColumn("select id from rating where id<10000 and rate= (select max(rate) from rating where id<10000)");



        $sellsHistory = array(
            array(
                "name" => "Meilleurs votes",
                "data" => array(9.1, 10.3, 6.5, 12.2, 5.3, 9.1, 11.1)
            ),
            array(
                "name" => "Bénéfices pour la France",
                "data" => array(6.6, 8.2, 0.76, 4.6, 2.1, 4.1, 3.9)
            ),
        );

        $dates = array(
            "21/06", "22/06", "23/06", "24/06", "25/06", "26/06", "27/06"
        );

        $ob = new Highchart();
        // ID de l'élement de DOM que vous utilisez comme conteneur
        $ob->chart->renderTo('barchart');
        $ob->title->text('Bénéfices du 21/06/2013 au 27/06/2013');
        $ob->chart->type('column');

        $ob->yAxis->title(array('text' => "Bénéfices (millions d'euros)"));

        $ob->xAxis->title(array('text' => "Date du jours"));
        $ob->xAxis->categories($dates);

        $ob->series($sellsHistory);

        return $this->render('EspritFrontOfficeBundle:Stat:BarChart.html.twig', array(
                    'barchart' => $ob
        ));
    }



    
    
    
    
    public function chartvoteAction() {
       $bdd = $this->get("database_connection");
 
$resultat1 = $bdd->fetchColumn("select id from rating where id>=10000 and rate= (select max(rate) from rating where id>=10000)");
$resultat2 = $bdd->fetchColumn("select id from rating where id<10000 and rate= (select max(rate) from rating where id<10000)");

$resultat11 = $bdd->fetchColumn("select max(rate) from rating where id>=10000");
$resultat22 = $bdd->fetchColumn("select max(rate) from rating where id<10000 ");

        $series = array(
            array(
                "name" => "La note de la meilleure idée",
                "data" => array($resultat11*1),
                "type" => "column"
            ),
            array(
                "name" => "La note du meilleur utilisateur",
                "data" => array($resultat22*1),
                "type" => "column"
            )
            );

        $yData = array(
            array(
                'title' => array(
                    'text' => "Note",
                    'style' => array('color' => '#AA4643')
                ),
                'opposite' => true,
            )
            
        );

        $dates = array(
            $resultat1/10000, $resultat2*1  
        );

        $ob = new Highchart();
        // ID de l'élement de DOM que vous utilisez comme conteneur
        $ob->chart->renderTo('overviewchart');
        $ob->title->text('Les meilleurs notes des idées et des utilisauteurs');

        $ob->yAxis->title(array('text' => "Les meilleurs notes des idées et des utilisauteurs"));
        $ob->yAxis($yData);

      

        $ob->series($series);


        return $this->render('EspritFrontOfficeBundle:Stat:unifiedChart.html.twig', array(
                    'overviewchart' => $ob
        ));
    }
    
    
    
}