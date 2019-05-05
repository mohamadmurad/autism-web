<?php
   require_once 'core/init.php';

  // $temp = new User();
   $tempadmin = new Admin();
/*
   if($temp->isLoggedIn()){
        Redirect::to('myacount/');
        exit();
   }*/

    if($tempadmin->isLoggedIn()){
        Redirect::to('dashboard/');
        exit();
    }


    if(Input::exists()){
        if(Token::check(Input::get('token'))){
  
          $validate = new Validate();
          $validation = $validate->check($_POST,array(
              'username' => array(
                  'required' => true,
               
               ),
              'password' => array(
                  'required' => true,
               )
          ));
  
  
        if($validation->passed()){

            $login_type = Input::get('login_type');
            
            switch($login_type){

                case 'user' :{}break;
                case 'admin':{

                    $admin = new Admin();

                    $remember = (Input::get('remember') === 'on') ? true : false;

                    $login = $admin->login(Input::get('username'),Input::get('password'),$remember);
                    
                   
                    switch ($login){
                        case 1 :{Redirect::to('dashboard/');} break;
                        default:
                     
                        break;
                    }
                      
                }break;

            }
  
          //$user = new User();
  
         // $remember = (Input::get('remember') === 'on') ? true : false;
  
  
  
         // $login = $user->login(Input::get('username'),Input::get('password'),$remember);
  
         /*
          switch ($login) {
            case 1 :
              if($user->data()->group_id == 0){
                Redirect::to('dashboard/');
  
              }else{
  
               Redirect::to('dashboard/allContact.php');
              }
               
              break;
            case 'active':
              //Redirect::to('active.php');
              
              break;
  
            case 'confirm':
             // Redirect::to('confirm.php');
        
              break;
  
            default:
              # code...
              break;
          }*/
  
          /*if($login){
            Redirect::to('dashboard.php');
          }*/
  
        }
  
        }
  
      }





   $pageTite = 'Autism | Login';

    include 'includes/Html/header.php';
?>

<div class="login-page">
        <div class="form-holder">

            <form method="post" class="form-validate mb-4" action="">
                <div class="form-group-material">
                    <input id="login-username" type="text" name="username" required autocomplete="off"
                        data-msg="Please enter your username" class="input-material">
                    <label for="login-username" class="label-material">User Name</label>
                </div>
                <div class="form-group-material">
                    <input id="login-password" type="password" name="password" required
                        data-msg="Please enter your password" class="input-material">
                    <label for="login-password" class="label-material">Password</label>
                </div>
                <div class="form-group-material">

                    <label for="login_type" class="label-material">ِAcount Type : </label>
                    <select id="login_type" name="login_type" required class="input-material">
                        <option value="user" selected>user</option>
                        <option value="admin">admin</option>
                    </select>
                   
                    
                </div>

                <div class="form-group-material">
                    <input id="login-password" type="checkbox" name="remember"
                       class="input-material">
                    <label for="login-password" class="label-material">remember</label>
                </div>
                <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <a href="#" class="forgot-pass">Forgot Password?</a>
            <br>
            <small>Do not have an
                account? </small>
                <a href="register.html" class="signup">Signup</a>



        </div>

    </div>


<?php
    include 'includes/Html/login_footer.php';

?>