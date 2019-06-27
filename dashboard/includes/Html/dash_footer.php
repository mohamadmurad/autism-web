
    <script src="../<?php echo Config::get("target/jquery"); ?>jquery.min.js"></script>
    <script src="../<?php echo Config::get("target/bootstrap"); ?>js/bootstrap.min.js"></script>
    <script src="../<?php echo Config::get("target/js"); ?>main.js"></script>
    <script src="../<?php echo Config::get("target/js"); ?>highcharts.js"></script>
    <script src="<?php echo Config::get("target/js"); ?>dashboard.js"></script>
    <script>
     $("#all-user").on('click','.clickable-row', function (e, row, $element) {
    window.location = $(this).data('href');
});
    </script>

<script type="text/javascript">

if ( $('#user_age_chart').length){
            Highcharts.chart('user_age_chart', {
                chart: {
                    backgroundColor: 'var(--black-mode-backgroud)',
                    type: 'column'
                },
                title: {
                    style: {
                                color: '#FFF',
                                font: 'bold 16px "Trebuchet MS", Verdana, sans-serif'
                            },
                    text: 'Users Age'
                    
                },
               
                xAxis: {
                    
                    categories: [
                        '5-10',
                        '11-15',
                        '16-20',
                        
                    ],
                    labels: {
                        style: {
                            color: '#FFF',
                            font: '11px Trebuchet MS, Verdana, sans-serif'
                        }
                    },
                   
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    labels: {
                        style: {
                            color: '#FFF',
                            font: '11px Trebuchet MS, Verdana, sans-serif'
                        }
                    },
                    title: {
                        style: {
                            color: '#FFF',
                            font: '11px Trebuchet MS, Verdana, sans-serif'
                        },
                        text: 'Count'
                    },
                   
                },
                legend: {
                    itemStyle: {
                        fontSize:'10px',
                        font: '10pt Trebuchet MS, Verdana, sans-serif',
                        color: '#FFF'
                    },
                    itemHoverStyle: {
                        color: '#DB6574'
                    },
                    itemHiddenStyle: {
                        color: '#444'
                    }
                
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y} User</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Users',
                    data: [15, 20, 2],
                    

                }]
            });
        }
        if ( $('#users_pecs_level_chart').length){
            Highcharts.chart('users_pecs_level_chart', {
                        chart: {
                            backgroundColor: 'var(--black-mode-backgroud)',
                          
                            type: 'pie'
                        },
                        title: {
                            style: {
                                color: '#FFF',
                                font: 'bold 16px "Trebuchet MS", Verdana, sans-serif'
                            },
                            text: 'Number Of User In PECS Level',
                            
                        },
                       
                        plotOptions: {
                            series: {
                                dataLabels: {
                                    enabled: true,
                                    style: {
                                        color: '#fff',
                                        font: '10px "Trebuchet MS", Verdana, sans-serif'
                                    },
                                    format: '{point.name}: {point.y}%'
                                }
                            }
                        },

                        tooltip: {
                            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.dec} </b> of <b>'+100+'</b> User<br/>'
                        },

                        series: [
                            {
                                name: "Users",
                                colorByPoint: true,
                                data: [
                                    {
                                        name: "Level 1",
                                        y: 50,
                                        dec:50,
                                        color:"#DB6574"
                                     
                                    },
                                    {
                                        name: "Level 2",
                                        y: 50,
                                        dec:50,
                                        color:"rgb(124,181,236)"
                                       
                                    }
                                ]
                            }
                        ],
                       
                    });

                    $.ajax({
               type: "POST",
               url: "../api/data.php",
               data:{op:"get_users_level_percent"},
              
   
            }).done(function( msg ) {
                var duce = jQuery.parseJSON(msg);
                  

                   var all = parseInt(duce[0].c) + parseInt(duce[1].c);
                   var level1 = (duce[0].c *100)/all;
                   var level2 = (duce[1].c *100)/all;

                  

                   Highcharts.chart('users_pecs_level_chart', {
                        chart: {
                            backgroundColor: 'var(--black-mode-backgroud)',
                          
                            type: 'pie'
                        },
                        title: {
                            style: {
                                color: '#FFF',
                                font: 'bold 16px "Trebuchet MS", Verdana, sans-serif'
                            },
                            text: 'Number Of User In PECS Level',
                            
                        },
                       
                        plotOptions: {
                            series: {
                                dataLabels: {
                                    enabled: true,
                                    style: {
                                        color: '#fff',
                                        font: '10px "Trebuchet MS", Verdana, sans-serif'
                                    },
                                    format: '{point.name}: {point.y}%'
                                }
                            }
                        },

                        tooltip: {
                            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.dec} </b> of <b>'+all+'</b> User<br/>'
                        },

                        series: [
                            {
                                name: "Users",
                                colorByPoint: true,
                                data: [
                                    {
                                        name: "Level 1",
                                        y: level1,
                                        dec:duce[0].c,
                                        color:"#DB6574"
                                     
                                    },
                                    {
                                        name: "Level 2",
                                        y: level2,
                                        dec:duce[1].c,
                                        color:"rgb(124,181,236)"
                                       
                                    }
                                ]
                            }
                        ],
                       
                    });
        
                });  
                }


            
                  
                    
		</script>

   
</body>

</html>
<?php ob_end_flush(); ?>