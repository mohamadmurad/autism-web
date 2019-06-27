
    <script src="../<?php echo Config::get("target/jquery"); ?>jquery.min.js"></script>
    <script src="../<?php echo Config::get("target/bootstrap"); ?>js/bootstrap.min.js"></script>
    <script src="../<?php echo Config::get("target/js"); ?>main.js"></script>
    <script src="../<?php echo Config::get("target/js"); ?>highcharts.js"></script>
   
    <script src="../dashboard/<?php echo Config::get("target/js"); ?>dashboard.js"></script>
    <script>
     $("#all-user").on('click','.clickable-row', function (e, row, $element) {
    window.location = $(this).data('href');
});
    </script>

<!--
<script type="text/javascript">
        Highcharts.chart('date_num_of_attempts_chart', {

            title: {
                text: 'Number of Attempts in this year '
            },

            subtitle: {
                text: '2019'
            },

            yAxis: {
                title: {
                    text: 'Number of Attempts'
                }
            },
            xAxis: {
                    categories: [
                        'JAN',
                        'FEB',
                        'MAR',
                        'APR',
                        'MAY',
                        "JUN",
                        'JUL',
                        'AUG',
                        'SEP',
                        'OCT',
                        'NOV',
                        'DEC'

                        
                    ],
                    crosshair: true
                },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            series: [ {
                name: 'Attempts',
                data: [40, 35, 35, 25, 20, 10, 7, 10,5,4,2,1]
            },{
                name: 'Duration',
                data: [60, 50, 44, 31, 20, 14, 14, 10,7,5,3,2]
            }],
            tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y} </b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

        });
		</script>-->
   
</body>

</html>
<?php ob_end_flush(); ?>