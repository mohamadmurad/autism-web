<?php
   require_once 'core/init.php';


   $tempadmin = new Admin();

   
    if($tempadmin->isLoggedIn()){

        if(Input::exists()){

                $user = new User();

                $salt = Hash::salt(32);
                $confirmHash = md5(Input::get('username')).Hash::unique();
                
                
                try {

                    $user->create(array(
                        'user_id'  => NULL,        
                        'username' => Input::get('username'),
                        'password' => Hash::make(Input::get('password'),$salt),
                        'full_name'=> Input::get('full_name'),
                        'salt'     => $salt,
                        'join_date' => date('Y=m-d H:i:s'),
                        'active'    => 1,
                        'birth_date' => Input::get('date'),
                        'user_pecs_level' => 1,
                        'created_by' =>  $tempadmin->data()->admin_id,

                    ));

                    
                } catch (Exception $e) {
                    die($e->getMessage());
                }

        }

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
                                        <form class="form-horizontal form-material" id="add_user" action="" method="post">
                                            <div class=" form-group-material">
                                                <input type="text" name="full_name" class="input-material is-invalid">
                                                <label class="label-material">Full Name</label>
                                            </div>

                                            <div class=" form-group-material">
                                                <input type="text" name="username" class="input-material is-invalid">
                                                <label class="label-material">Username</label>
                                            </div>

                                            <div class="form-group-material">
                                                <input type="password" name="password" class="input-material">
                                                <label class="label-material">Password</label>
                                            </div>
                                      
                                            <div class=" form-group-material">
                                                <input type="date" name="date" class="input-material">
                                                <label class="label-material">BirthDate</label>
                                            </div>
                                           
                                            <div class="form-group">
                                                
                                                <button type="submit" class="btn btn-primary btn-md">Add</button>

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
