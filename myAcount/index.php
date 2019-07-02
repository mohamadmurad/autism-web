<?php
   require_once 'core/init.php';


   $user = new User();

   
    if($user->isLoggedIn()){
             
        $profile_info = Data::get_user_info( $user->data()->user_id);

        
        $pageTite =  $profile_info->username . " | Profile";

        include 'includes/Html/dash_header.php';
    
        include 'includes/Html/dash_navbar.php';
?>
        <div class="page-content" style="width:100%;">
            <div class="page-header">
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item ">
                        <a id="profile_btn" class="nav-link active" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile">Information</a>
                         </li>
                    <li class="nav-item" >
                         <a id="game_btn" class="nav-link" data-toggle="tab" href="#pecs"
                            role="tab" aria-controls="pecs">Game Results</a>
                    </li>
                    <li class="nav-item" >
                         <a id="edit_info_btn" class="nav-link" data-toggle="tab" href="#settings"
                          role="tab" aria-controls="settings">Edit Information</a>
                    </li>
                </ul>
            </div>

            <section id="profile-content" class="no-padding-top no-padding-bottom">
                <div class="container-fluid">
                    <div class="row">

                        <div class="tab-pane show active" id="profile" role="tabpanel">
                            <div class="col-lg-4 col-xlg-3 col-md-5" style="float: left;">
                                <div class="card block">

                                    <div class="card-block little-profile text-center">
                                        <div class="pro-img"><img src="../public/userImg/<?php echo $profile_info->profile_img; ?>" alt="user"></div>
                                        
                                        <h1 class="h5" id="h1_full_name"><?php echo $profile_info->full_name; ?></h1>

                                        <p id="p_birth_date"><?php echo $profile_info->birth_date; ?></p>

                                
                                        <div class="numbers row text-center">
                                            <div class="col-lg-6 col-md-6 m-t-20">
                                                <h3 class="m-b-0 font-light">1099</h3><small>Scoure</small>
                                            </div>
                                            <div class="col-lg-6 col-md-6 m-t-20">
                                                <h3 class="m-b-0 font-light">2</h3><small>Level</small>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-xlg-9 col-md-7" style="float:right;">
                                        <div class="card block">
                                            <h1 class="h5 user_info" id="h1_username"><span>Username : </span><?php echo " ". $profile_info->username; ?></h1>
                                            <hr>
                                            <h1 class="h5 user_info" id="h1_join_date"><span>Join Date : </span><?php echo " ". $profile_info->join_date; ?></h1>
                                            <hr>
                                            <h1 class="h5 user_info" id="h1_user_pecs_level"><span>PECS LEVEL : </span><?php echo " ". $profile_info->user_pecs_level; ?></h1>
                                        </div>
                                    </div>
                        </div>

                        <div class="tab-pane show" id="pecs" role="tabpanel">
                            <div class="col-lg-6 col-xlg-6 col-md-12" style="float:left;">
                                <div class="card block">

                                <div id="week_ancers"></div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-xlg-6 col-md-12" style="float:right;">
                                <div class="card block">
                                    <div class="">
                                        <h1 class="h5 user_info"><span>Level : </span> 2</h1>
                                        <hr>
                                        <h1 class="h5 user_info"><span>Scoure : </span> 1099</h1>
                                        <hr>
                                        <h1 class="h5 user_info"><span>Number of Questions is Answered: </span> <i id="answered">10</i> <span> Of </span> <i id="question">10</i> <span> Question</span></h1>
                                            <hr>
                                    </div>
                                    <div id="date_num_of_attempts_chart"></div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane show" id="settings" role="tabpanel">
                            <div class="col-lg-12 col-xlg-12 col-md-12">
                            <div class="alert alert-success" style="display:none;" id="succ_alert_update_info">Information Updated :)</div>
                            <div class="alert alert-danger" style="display:none;" id="danger_alert_update_info">Information Not Updated :)</div>

                                <div class="card block">
                                    <div class="card-block">
                                        <form id="edit-level-form" class="form-horizontal form-material" action="" method="">
                                           

                                            <h5>PECS Level</h5>
                                            <div class=" ">
                                                <input id="p_l1" type="radio" class="radio-template" name="p_level" value="1" <?php echo ($profile_info->user_pecs_level == 1 )? "checked" :  ""; ?>>
                                                <label for="p_l1" class="label-material">Level 1</label>
                                            </div>

                                            <div class=" form-group-material">
                                                <input id="p_l2" type="radio" class="radio-template" name="p_level" value="2" <?php echo ($profile_info->user_pecs_level == 2 )? "checked" :  ""; ?>>
                                                <label for="p_l2" class="label-material">Level 2</label>
                                            </div>

                                            <div class="form-group">
                                            <input id="u_id" type="hidden" class="input-material" name="user_id" value="<?php echo $user->data()->user_id ?>">

                                                <button type="submit" class="btn btn-primary btn-md">Update Profile</button>

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
