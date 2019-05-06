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
                    <h2 class="h5 no-margin-bottom">Add User</h2>
                </div>
                
            </div>

            <section id="all-user" class="no-padding-top no-padding-bottom">
                <div class="container-fluid">
                    <div class="row">

                    <div class="tab-pane show" id="settings" role="tabpanel">
                            <div class="col-lg-12 col-xlg-12 col-md-12">
                                <div class="card block">
                                    <div class="card-block">
                                        <form class="form-horizontal form-material" action="" method="">
                                            <div class=" form-group-material">


                                                <input type="text" class="input-material is-invalid">
                                                <label class="label-material">Full Name</label>
                                            </div>
                                            <div class=" form-group-material">

                                                <input type="email" class="input-material is-valid"" name="
                                                    example-email" id="example-email">
                                                <label for="example-email" class="label-material">Email</label>
                                            </div>
                                            <div class="form-group-material">


                                                <input type="password" value="password"
                                                    class="input-material">
                                                <label class="label-material">Password</label>
                                            </div>
                                            <div class=" form-group-material">


                                                <input type="text" class="input-material">
                                                <label class="label-material">Phone No</label>
                                            </div>

                                            <div class=" form-group-material">
                                                <label class="label-material">Select Country</label>

                                                <select class="input-material">
                                                    <option>London</option>
                                                    <option>India</option>
                                                    <option>Usa</option>
                                                    <option>Canada</option>
                                                    <option>Thailand</option>
                                                </select>

                                            </div>
                                            <div class="form-group">

                                                <button class="btn btn-primary btn-md">Add</button>

                                            </div>
                                        </form>
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
