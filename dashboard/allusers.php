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
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>BirthDate</th>
                                            <th>PECS Level</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 

                                    $allusers = Data::get_all_users();

                                    foreach($allusers as $user){

                                        echo "<tr class='clickable-row' data-href='profile.php?u=".$user->user_id."'>";
                                        echo "<th scope='row'>". $user->user_id ."</th>";
                                        echo "<td>". $user->full_name ."</td>";
                                        echo "<td>". $user->username ."</td>";
                                        echo "<td>". $user->birth_date ."</td>";
                                        echo "<td>". $user->user_pecs_level ."</td>";
                                        
                                        echo "</tr>\n";
                                    }
                                    
                                     
                                    
                                    ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>

            </section>
            <script>
            
            </script>
        </div>

    </div>

<?php
       include 'includes/Html/dash_footer.php'; 
    }else{
        Redirect::to('../login.php');
    }


   
?>
