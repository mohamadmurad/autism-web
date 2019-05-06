<?php

class Data{



    public static function get_all_users(){

        $db = DB::getInstance();

        $result = $db->query('SELECT user_id,username , full_name, birth_date , user_pecs_level FROM users');
        return $result->results();

    }

    public static function get_user_info($user_id){

        if($user_id){
            $db = DB::getInstance();
            $result = $db->get('users',array("user_id","=",$user_id));
            return $result->first();
        }else{
            return null;
        }
        

    }


}