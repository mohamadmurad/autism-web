<?php
   require_once 'core/init.php';


   $tempadmin = new Admin();

   
    if($tempadmin->isLoggedIn()){


        if(Input::exists("get")){
            
        
        $profile_info = Data::get_user_info(Input::get('u'));

        
        $pageTite =  $profile_info->username . " | Profile";

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
                                        <div class="pro-img"><img src="../public/userImg/<?php echo $profile_info->profile_img; ?>" alt="user"></div>
                                        <h1 class="h5"><?php echo $profile_info->full_name; ?></h1>
                                        <p><?php echo $profile_info->birth_date; ?></p>
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

                                                <input type="text" class="input-material" name="full_name" value="<?php echo $profile_info->full_name; ?>">
                                                <label class="label-material">Full Name</label>
                                            </div>
                                            <div class=" form-group-material">

                                                <input type="text" class="input-material" name="username" id="username" value="<?php echo $profile_info->username; ?>">
                                                <label for="example-email" class="label-material">UserName</label>
                                            </div>
                                            <div class="form-group-material">

                                                <input type="password"  class="input-material" name="password">
                                                <label class="label-material">Password</label>
                                            </div>
                                            <div class=" form-group-material">
                                                <input type="date" class="input-material" value="<?php echo $profile_info->birth_date; ?>">
                                                <label class="label-material">BirthDate</label>
                                            </div>

                                            <h5>PECS Level</h5>
                                            <div class=" ">
                                                <input id="p_l1" type="radio" class="radio-template" name="p_level" value="0" <?php echo ($profile_info->user_pecs_level == 1 )? "checked" :  ""; ?>>
                                                <label for="p_l1" class="label-material">Level 1</label>
                                            </div>

                                            <div class=" form-group-material">
                                                <input id="p_l2" type="radio" class="radio-template" name="p_level" value="1" <?php echo ($profile_info->user_pecs_level == 2 )? "checked" :  ""; ?>>
                                                <label for="p_l2" class="label-material">Level 2</label>
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
            Redirect::to('index.php');
        }
    }else{
        Redirect::to('../login.php');
    }


   
?>
