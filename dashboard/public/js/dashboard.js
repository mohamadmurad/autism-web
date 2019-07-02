$('.sidebar-toggle').on('click', function () {
    $(this).toggleClass('active');

    $('#sidebar').toggleClass('shrinked');
    $('.page-content').toggleClass('active');
    $(document).trigger('sidebarChanged');

    if ($('.sidebar-toggle').hasClass('active')) {
        $('.navbar-brand .brand-sm').addClass('visible');
        $('.navbar-brand .brand-big').removeClass('visible');
        $(this).find('i').attr('class', 'fas fa-arrow-right');
    } else {
        $('.navbar-brand .brand-sm').removeClass('visible');
        $('.navbar-brand .brand-big').addClass('visible');
        $(this).find('i').attr('class', 'fas fa-arrow-left');
    }
});



$("#edit-form").on("submit",function(){
    
   // e.preventDefault();

      var form_data = new FormData(this);
      form_data.append("op", "update-user-info");


        $.ajax({
              type: "POST",
              url: "../api/data.php",
              data:form_data,
              processData: false,
              contentType: false ,  
  
           }).done(function( msg ) {
        
            if(msg == "true"){
                $("#danger_alert_update_info").hide();
                $("#succ_alert_update_info").show();
                
                
                              
            }else{
                $("#succ_alert_update_info").hide();
                $("#danger_alert_update_info").show();
                
            }
            
       

        });  
        
        return false;
});


$("#profile_btn").on("click",function(){


    var form_data = new FormData();
    form_data.append("op", "get_info");
    form_data.append("u_id", $("#u_id").val());

    $.ajax({
        type: "POST",
        url: "../api/data.php",
        data:form_data,
        processData: false,
        contentType: false ,  

        }).done(function( msg ) {

            var duce = jQuery.parseJSON(msg)[0];
         

            $("#h1_username").html("<span>Username : </span> " + duce.username);
            $("#h1_join_date").html("<span>Join Date : </span> " + duce.join_date);
            $("#h1_user_pecs_level").html("<span>PECS LEVEL : </span> " + duce.user_pecs_level);

            $("#h1_full_name").html(duce.full_name);
            $("#p_birth_date").html( duce.birth_date);
           
     
        
    

    });  

});

$("#edit_info_btn").on("click",function(){

    $("#danger_alert_update_info").hide();
                $("#succ_alert_update_info").hide();
});


$("#edit-level-form").on("submit",function(){
    
    // e.preventDefault();
 
       var form_data = new FormData(this);
       form_data.append("op", "update-user-level");
 
 
         $.ajax({
               type: "POST",
               url: "../api/data.php",
               data:form_data,
               processData: false,
               contentType: false ,  
   
            }).done(function( msg ) {
         
             if(msg == "true"){
                 $("#danger_alert_update_info").hide();
                 $("#succ_alert_update_info").show();
                 
                 
                               
             }else{
                 $("#succ_alert_update_info").hide();
                 $("#danger_alert_update_info").show();
                 
             }
             
        
 
         });  
         
         return false;
 });


 $(document).ready(function(){
    

    if ( $('#week_ancers').length){
            Highcharts.chart('week_ancers', {
                chart: {
                    backgroundColor: 'var(--black-mode-backgroud)',
                
                },
                title: {
                    style: {
                        color: '#FFF',
                        font: 'bold 16px "Trebuchet MS", Verdana, sans-serif'
                    },
                    text: 'Number of correct answers last week'
                },

                subtitle: {
                    style: {
                        color: '#FFF',
                        font: 'bold 10px "Trebuchet MS", Verdana, sans-serif'
                    },
                    text: '2019'
                },

                yAxis: {
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
                        text: 'NUmber of correct answers'
                    }
                },
                
                xAxis: {
                    labels: {
                        style: {
                            color: '#FFF',
                            font: '11px Trebuchet MS, Verdana, sans-serif'
                        }
                    },
                        categories: [
                            'week 1',
                            'week 2',
                            'week 3',
                            'week 4',                           
                        ],
                        crosshair: true
                    },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    itemStyle: {
                        color: '#FFF'
                    }  
                },
                series: [ {
                    name: 'correct answers',
                    data: [10, 11, 8, 15],
                    
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
    }

    if ( $('#date_num_of_attempts_chart').length){
        Highcharts.chart('date_num_of_attempts_chart', {
            chart: {
                backgroundColor: 'var(--black-mode-backgroud)',
            
            },
            title: {
                style: {
                    color: '#FFF',
                    font: 'bold 16px "Trebuchet MS", Verdana, sans-serif'
                },
                text: 'Number of correct Attempts And Duration'
            },

            subtitle: {
                style: {
                    color: '#FFF',
                    font: 'bold 10px "Trebuchet MS", Verdana, sans-serif'
                },
                text: '2019'
            },

            yAxis: {
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
                    text: 'Number of Attempts or Duration'
                }
            },
            
            xAxis: {
                labels: {
                    style: {
                        color: '#FFF',
                        font: '11px Trebuchet MS, Verdana, sans-serif'
                    }
                },
                    categories: [
                        'q 1',
                        'q 2',
                        'q 3',
                        'q 4',  
                        'q 5',
                        'q 6',
                        'q 7',
                        'q 8',
                        'q 9',
                        'q 10',                         
                    ],
                    crosshair: true
                },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                itemStyle: {
                    color: '#FFF'
                }  
            },
            series: [ {
                name: 'Number of Attempts',
                data: [15, 11, 12, 11,10,4,7,3,6,2],
                
            },{
                name: 'Duration in secound',
                data: [60, 60, 55, 60,65,50,40,20,22,10],
                
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

        $.ajax({
            type: "POST",
            url: "../api/data.php",
            data:{op:"get_num_of_q_ancers",u_id:$("#u_id").val()},
           

         }).done(function( msg ) {
                console.log(msg);

                var duce = jQuery.parseJSON(msg);


                var QUESTION = duce[0][0].q;
                var ANSWERED = duce[0][1].a;

                $("#question").html(QUESTION);
                $("#answered").html(ANSWERED);
                console.log(QUESTION);
                var q_id =[];
                var att = [];
                var dur = [];
                var j =0;
                for(var i=2;i<duce[0].length;i++){
                    console.log(duce[0][i]);
                    q_id[j] = parseInt(duce[0][i].q_id);
                    att[j] = parseInt(duce[0][i].att);
                    dur[j] = parseInt(duce[0][i].dur);
                    j++;
                }

                console.log(dur[0]);

                Highcharts.chart('date_num_of_attempts_chart', {
                    chart: {
                        backgroundColor: 'var(--black-mode-backgroud)',
                    
                    },
                    title: {
                        style: {
                            color: '#FFF',
                            font: 'bold 16px "Trebuchet MS", Verdana, sans-serif'
                        },
                        text: 'Number of correct Attempts And Duration'
                    },
        
                    subtitle: {
                        style: {
                            color: '#FFF',
                            font: 'bold 10px "Trebuchet MS", Verdana, sans-serif'
                        },
                        text: '2019'
                    },
        
                    yAxis: {
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
                            text: 'Number of Attempts or Duration'
                        }
                    },
                    
                    xAxis: {
                        labels: {
                            style: {
                                color: '#FFF',
                                font: '11px Trebuchet MS, Verdana, sans-serif'
                            }
                        },
                            categories: q_id,
                            crosshair: true
                        },
                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'middle',
                        itemStyle: {
                            color: '#FFF'
                        }  
                    },
                    series: [ {
                        name: 'Number of Attempts',
                        data: att,
                        
                    },{
                        name: 'Duration in secound',
                        data: dur,
                        
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

         });
}
    
 });