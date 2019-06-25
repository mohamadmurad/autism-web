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


/*
* event on click information btn
*/
$("#edit-form").on("submit",function(){


    console.log("fdfd");
    
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