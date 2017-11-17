<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Esprit\FrontOfficeBundle\Controller;

use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Zend\Json\Expr;
use Symfony\Component\Translation\interval;


/**
 * Description of StatController
 *
 * @author HOUCEM-pc
 */
class StatController extends Controller {
/*
    public function startAction() {
        // Chart
        $series = array(
            array("name" => "Data Serie Name", "data" => array(1, 2, 4, 5, 6, 3, 8))
        );

        $ob = new Highchart();
        $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
        $ob->title->text('Chart Title');
        $ob->xAxis->title(array('text' => "Horizontal axis title"));
        $ob->yAxis->title(array('text' => "Vertical axis title"));
        $ob->series($series);

        return $this->render('EspritFrontOfficeBundle:STAT:stat.html.twig', array('chart' => $ob));
    }*/
    public function lineCharAction()//line chart select count(*),datePost from probleme group by datePost
            {
        
        
        $em = $this->getDoctrine()->getManager();
        //select count(*),type from probleme Group by type
        $query = $em->createQuery("SELECT Count(p.id) as nbr,p.datePost as d   FROM EspritFrontOfficeBundle:Probleme p GROUP BY p.datePost");
        $resultat = $query->getResult();
       // var_dump($resultat);
        
        $data=array();
           
        foreach ($resultat as $values){
            $a=array($values ['d']->format('d-m-Y'), intval($values ['nbr'])) ;
            array_push($data, $a);
            
        $sellsHistory = array(
            array(
                "name" => "nombre de probleme ",
                "data" => $data
            ),
        );
        $dates = array($data[0]);//les dates 
        
        
        }
        $ob = new Highchart();
        // ID de l'élement de DOM que vous utilisez comme conteneur
        $ob->chart->renderTo('linechart');
        $ob->title->text('Nombre de problemes par jour');

        $ob->yAxis->title(array('text' => "Nombre de problemes"));

        $ob->xAxis->title(array('text' => "Date du jours"));
        $ob->xAxis->categories($dates);

        $ob->series($sellsHistory);

        return $this->render('EspritFrontOfficeBundle:STAT:LineChart.html.twig', array(
                    'linechart' => $ob
        ));
    }

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function unifiedGraphAction() {
        $series = array(
            array(
                "name" => "Bénéfices total",
                "data" => array(9.1, 10.3, 6.5, 12.2, 5.2, 9.1, 11.1),
                "type" => "column"
            ),
            array(
                "name" => "Bénéfices pour la France",
                "data" => array(6.6, 8.2, 0.76, 4.6, 2.1, 4.1, 3.9),
                "type" => "column"
            ),
            array(
                "name" => "Total des ventes",
                "data" => array(683, 756, 543, 1208, 617, 990, 1001),
                "type" => "spline",
                "yAxis" => 1,
            ),
            array(
                "name" => "Ventes en France",
                "data" => array(467, 321, 56, 698, 134, 344, 452),
                "type" => "spline",
                "yAxis" => 1,
            ),
            array(
                "type" => "pie",
                "name" => "Pourcentage des ventes totales",
                "data" => array(
                    array('Guinness', 32.0),
                    array('Westvleteren', 26.8),
                    array('Alchemist Heady Topper', 13.0),
                    array('La Thou', 12.8),
                    array('Russian River Pliny the Elder', 8.5),
                    array('Founders KBS', 6.2),
                    array('Rochefort Trappistes 10', 0.7)
                ),
                "center" => array(50, 50),
                "size" => 100,
                "showInLegend" => false,
                "dataLabels" => array(
                    "enabled" => false
                )
            )
        );

        $yData = array(
            array(
                'title' => array(
                    'text' => "Bénéfices (millions d'euros)",
                    'style' => array('color' => '#AA4643')
                ),
                'opposite' => true,
            ),
            array(
                'title' => array(
                    'text' => "Ventes (milliers d'unités)",
                    'style' => array('color' => '#4572A7')
                ),
            ),
        );

        $dates = array(
            "21/06", "22/06", "23/06", "24/06", "25/06", "26/06", "27/06"
        );

        $ob = new Highchart();
        // ID de l'élement de DOM que vous utilisez comme conteneur
        $ob->chart->renderTo('overviewchart');
        $ob->title->text('Ventes au cours de la semaine');

        $ob->yAxis->title(array('text' => "Vente en milliers"));
        $ob->yAxis($yData);

        $ob->xAxis->title(array('text' => "Date du jours"));
        $ob->xAxis->categories($dates);

        $ob->series($series);


        return $this->render('EspritFrontOfficeBundle:Stat:unifiedChart.html.twig', array(
                    'overviewchart' => $ob
        ));
    }

    public function barChartAction() {
        $sellsHistory = array(
            array(
                "name" => "Bénéfices total",
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

    //histogramme
    public function chartHistogrammeAction() {
        $series = array(
            array(
                'name' => 'Rainfall',
                'type' => 'column',
                'color' => '#4572A7',
                'yAxis' => 1,
                'data' => array(49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4),
            ),
            array(
                'name' => 'Temperature',
                'type' => 'spline',
                'color' => '#AA4643',
                'data' => array(7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6),
            ),
        );
        $yData = array(
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + " degrees C" }'),
                    'style' => array('color' => '#AA4643')
                ),
                'title' => array(
                    'text' => 'Temperature',
                    'style' => array('color' => '#AA4643')
                ),
                'opposite' => true,
            ),
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + " mm" }'),
                    'style' => array('color' => '#4572A7')
                ),
                'gridLineWidth' => 0,
                'title' => array(
                    'text' => 'Rainfall',
                    'style' => array('color' => '#4572A7')
                ),
            ),
        );
        $categories = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
        $ob = new Highchart();
        $ob->chart->renderTo('container'); // The #id of the div where to render the chart
        $ob->chart->type('column');
        $ob->title->text('Average Monthly Weather Data for Tokyo');
        $ob->xAxis->categories($categories);
        $ob->yAxis($yData);
        $ob->legend->enabled(false);
        $formatter = new Expr('function () {
            var unit = {
            "Rainfall": "mm",
            "Temperature": "degrees C"
            }[this.series.name];
            return this.x + ": <b>" + this.y + "</b> " + unit;
            }');
        $ob->tooltip->formatter($formatter);
        $ob->series($series);
        return $this->render('EspritFrontOfficeBundle:STAT:histogramme.html.twig', array(
                    'histochart' => $ob
        ));
    }
    
    
/// dynamic pie chart made by javv hehe
    public function chartPieAction() {
        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text('Nombre de problemes par type ');
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));
          $em = $this->getDoctrine()->getManager();
        //select count(*),type from probleme Group by type
        $query = $em->createQuery("SELECT Count(p.id) as nbr,p.type as t   FROM EspritFrontOfficeBundle:Probleme p GROUP BY p.type");
        $resultat = $query->getResult();
        //var_dump($resultat);
        $data=array();
        foreach ($resultat as $values){
            $a=array($values ['t'], intval($values ['nbr'])) ;
            array_push($data, $a);
        }
            
        /*$data = array(
            array('Firefox', 45.0),
            array('IE', 26.8),
            array('Chrome', 12.8),
            array('Safari', 8.5),
            array('Opera', 6.2),
            array('Others', 0.7),
        );*/
        $ob->series(array(array('type' => 'pie', 'name' => 'Browser share', 'data' => $data)));
        return $this->render('EspritFrontOfficeBundle:STAT:pie.html.twig', array(
                    'chart' => $ob
        ));
    }

}
