<?php
if(isset($_POST)){

    if($_POST['username'] == ''){
        $error_data = array();
        $error_data['status'] = false;
        $error_data['message'] = array(
            'username' => 'User name sould not be empty !'
        ); 
        print_r(json_encode($error_data));
        return false;
    }
    $error_data = array();
    $error_data['status'] = true;
    $error_data['message'] = "Success !";

    print_r(json_encode($error_data));
}