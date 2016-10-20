<?php
/**
 * Created by IntelliJ IDEA.
 * User: tewapong
 * Date: 20/10/2559
 * Time: 15:50
 */


use miloschuman\highcharts\Highcharts;
echo Highcharts::widget([
    'options' => [
        'chart' => [
            'type' => 'column'         ],
        'title' => ['text' => 'Amount of Computer by type'],
        'xAxis' => [
            'categories' => [ 'Computer type'],
        ],
        'yAxis' => [
            'title' => ['text' => 'Total']
        ],
        'series' => $data
    ]
]);