<?php
        require "core/init.php";

        if(Input::exists()){

            if(Input::get("username") && Input::get('password')){
            
                $user = new User();

                $login = $user->login_api(Input::get("username") , Input::get('password'));
                if($login){
                    echo $login;

                }else{
                    echo "false";
                }
            }else{
                echo "error require all";
            }

            
        }else{
            echo "error";
        }

        ?>