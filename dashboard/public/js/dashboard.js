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