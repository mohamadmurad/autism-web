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
                    <h2 class="h5 no-margin-bottom">All User</h2>
                </div>
                
            </div>

            <section id="all-user" class="no-padding-top no-padding-bottom">
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="block block-center">
                            <div class="title">
                                <strong>Users</strong>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>mohamad</td>
                                            <td>murad</td>
                                            <td>mhdite7@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <td>mouaz</td>
                                            <td>Herafi</td>
                                            <td>mouaz@gmail.com</td>
                                        </tr>
                                    </tbody>
                                </table>
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
