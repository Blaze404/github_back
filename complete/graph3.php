

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 250px; min-height: 300px; width: 100%; height: 40%; margin: 0 auto; margin-top: 2%; border: 1px solid blue; padding: 5%"></div>
 
<script>
var district = <?php echo json_encode($district); ?>;
/*alert(district);*/
<?php
// echo "console.log( ".json_encode($second).");";?>
var graphtitle = <?php echo json_encode($table_name); ?>;
graphtitle = graphtitle[0].toUpperCase() + graphtitle.substr(1);
var vals1 = <?php echo json_encode($current); ?>;
console.log(vals1);
var vals2 = <?php echo json_encode($third_col); ?>;
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: graphtitle,
        style: {
                color: '#F00',
                font: 'bold 30px "Trebuchet MS", Verdana, sans-serif'
        }
    },
    xAxis: {
        categories: district,
        crosshair: true,
        labels: {
            style: {
                
                font: '14px Arial, sans-serif'
            }
        }

    },
    yAxis: {
        min: 0,
        title: {
            text: <?php echo json_encode($table_name); ?> + "s/ies",
            style: {
                font: 'bold 18px "Trebuchet MS", Verdana, sans-serif',
            }    
        },
        labels: {
            style: {
                
                font: '18px Arial, sans-serif'
            }
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:100px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} dead people</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.1,
            borderWidth: 0
        }
    },
    series: [
        //  name: <?php echo json_encode($second); ?>,
        // color: {
        //             linearGradient: { x1: 0, x2: 0, y1: 0, y2: 1 },
        //             stops: [
        //                 [0, '#035277'],
        //                 [1, '#77b9d8']
        //             ]
        //         },
        // data: vals1 /*[49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]*/

    
   <?php 
        if ( $table_name != 'drought_analysis'){

            echo " { ";
            echo "name: ".json_encode($second).",";

            echo "color: { ";
            echo " linearGradient: { x1: 0, x2: 0, y1: 0, y2: 1 }, ";
            echo " stops: [ ";
            echo " [0, '#035277'],
                        [1, '#77b9d8'] ";
            echo "  ] }, data: vals1 } , " ;
            
        }

     ?>
 
    {
        name: <?php echo json_encode( $third); ?> ,
        color: {
                    linearGradient: { x1: 0, x2: 0, y1: 0, y2: 1 },
                    stops: [
                        [0, '#035277'],
                        [1, '#77b9d8']
                    ]
                },
        style: {
            font: '20px Arial, sans-serif'
        },
        data: vals2
    
    
}

]
});


</script>