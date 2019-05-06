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
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item ">
                        <a class="nav-link active" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile">Profile</a>
                         </li>
                    <li class="nav-item" >
                         <a class="nav-link" data-toggle="tab" href="#pecs"
                            role="tab" aria-controls="pecs">PECS</a>
                    </li>
                    <li class="nav-item" >
                         <a class="nav-link" data-toggle="tab" href="#settings"
                          role="tab" aria-controls="settings">Acount Settings</a>
                    </li>
                </ul>
            </div>

            <section id="profile-content" class="no-padding-top no-padding-bottom">
                <div class="container-fluid">
                    <div class="row">

                        <div class="tab-pane show active" id="profile" role="tabpanel">
                            <div class="col-lg-4 col-xlg-3 col-md-5">
                                <div class="card block">

                                    <div class="card-block little-profile text-center">
                                        <div class="pro-img"><img src="./public/img/avatar-1.jpg" alt="user"></div>
                                        <h1 class="h5">Angela Dominic</h1>
                                        <p>22 year</p>
                                        <a href="javascript:void(0)" class="btn btn-primary btn-md">Follow</a>
                                        <div class="numbers row text-center">
                                            <div class="col-lg-4 col-md-4 m-t-20">
                                                <h3 class="m-b-0 font-light">1099</h3><small>Articles</small>
                                            </div>
                                            <div class="col-lg-4 col-md-4 m-t-20">
                                                <h3 class="m-b-0 font-light">23,469</h3><small>Followers</small>
                                            </div>
                                            <div class="col-lg-4 col-md-4 m-t-20">
                                                <h3 class="m-b-0 font-light">6035</h3><small>Following</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-lg-8 col-xlg-9 col-md-7">
                                        <div class="card block">
                                            
                                        </div>
                                    </div>-->
                        </div>

                        <div class="tab-pane show" id="pecs" role="tabpanel">
                            <div class="col-lg-4 col-xlg-3 col-md-5">
                                <div class="card block">


                                </div>
                            </div>
                            <div class="col-lg-8 col-xlg-9 col-md-7">
                                <div class="card block">

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane show" id="settings" role="tabpanel">
                            <div class="col-lg-12 col-xlg-12 col-md-12">
                                <div class="card block">
                                    <div class="card-block">
                                        <form class="form-horizontal form-material" action="" method="">
                                            <div class=" form-group-material">


                                                <input type="text" class="form-control input-material is-invalid">
                                                <label class="label-material">Full Name</label>
                                            </div>
                                            <div class=" form-group-material">

                                                <input type="email" class="form-control input-material is-valid"" name="
                                                    example-email" id="example-email">
                                                <label for="example-email" class="label-material">Email</label>
                                            </div>
                                            <div class="form-group-material">


                                                <input type="password" value="password"
                                                    class="form-control input-material">
                                                <label class="label-material">Password</label>
                                            </div>
                                            <div class=" form-group-material">


                                                <input type="text" class="form-control input-material">
                                                <label class="label-material">Phone No</label>
                                            </div>

                                            <div class=" form-group-material">
                                                <label class="label-material">Select Country</label>

                                                <select class="form-control form-control-line">
                                                    <option>London</option>
                                                    <option>India</option>
                                                    <option>Usa</option>
                                                    <option>Canada</option>
                                                    <option>Thailand</option>
                                                </select>

                                            </div>
                                            <div class="form-group">

                                                <button class="btn btn-primary btn-md">Update Profile</button>

                                            </div>
                                        </form>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <footer class="footer">
                <div class="footer__block block no-margin-bottom">
                    <div class="container-fluid text-center">
                        <p class="no-margin-bottom">2019 &copy; Your company. Design by <a href="#"
                                class="text-primary">Bootstrapious</a>.</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>

<?php
       include 'includes/Html/dash_footer.php'; 
    }else{
        Redirect::to('../login.php');
    }


   
?>
