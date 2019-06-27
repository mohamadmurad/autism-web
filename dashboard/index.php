<?php
   require_once 'core/init.php';


   $tempadmin = new Admin();

   
    if($tempadmin->isLoggedIn()){

        $pageTite = 'Autism | Admin Dashboard';

        include 'includes/Html/dash_header.php';
    
        include 'includes/Html/dash_navbar.php';
?>
 <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <h2 class="h5 no-margin-bottom">Dashboard</h2>
                </div>
                
            </div>

            <section id="all-user" class="no-padding-top no-padding-bottom">
                <div class="container-fluid">
                    <div class="row">

                    <div class="tab-pane show" id="settings" role="tabpanel">
                            <div class="col-lg-7 col-xlg-7 col-md-12" style="float:left;">
                                <div class="card block">
                                    <div class="card-block">
                                        <div id="user_age_chart"></div>

                                     
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-5 col-xlg-5 col-md-12" style="float:right;">
                                <div class="card block">
                                    <div class="card-block">
                                       

                                        <div id="users_pecs_level_chart"></div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </section>
        </div>

    </div>

    

<?php
       include 'includes/Html/dash_footer.php'; 
    }else{
        Redirect::to('../login.php');
    }


   
?>
