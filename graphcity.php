

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container_city" style="min-width: 250px; min-height: 300px; width: 80%; height: 40%; margin: 0 auto; margin-top: 2%; padding: 5%"></div>
 
<script>
var district = <?php echo json_encode($city_crime); ?>;
/*alert(district);*/
var graphtitle = <?php echo json_encode($city_name); ?>;
graphtitle = graphtitle[0].toUpperCase() + graphtitle.substr(1);
var vals = <?php echo json_encode($city_values); ?>;
Highcharts.chart('container_city', {
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
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: <?php echo json_encode($city_name); ?> + "s/ies",
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
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
    series: [{
        name: <?php echo json_encode($table_name); ?>,
        color: {
                    linearGradient: { x1: 0, x2: 0, y1: 0, y2: 1 },
                    stops: [
                        [0, '#035277'],
                        [1, '#77b9d8']
                    ]
                },
        data: vals /*[49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]*/

    }]
});
</script>