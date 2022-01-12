<?php 
    require_once '../function.php';
    require_once DR.'inc'.DS.'header.php';
    require_once DR.'admin'.DS.'db'.DS.'db.php';

    if(
        isset($_POST['userId']) && !empty($_POST['userId']) &&
        isset($_POST['email']) && !empty($_POST['email']) &&
        isset($_POST['firstName']) && !empty($_POST['firstName']) &&
        isset($_POST['lastName']) && !empty($_POST['lastName']) &&
        isset($_POST['userPassword']) && !empty($_POST['userPassword']) &&
        isset($_POST['confPassword']) && !empty($_POST['confPassword'])){

        // Check User ID Exist. 
        db::getInstance()->insert('users',array(
            'user_first_name' => $_POST['firstName'],
            'user_last_name' =>$_POST['lastName'],
            'user_email'=>$_POST['email'],
            'user_password'=>password_hash($_POST['userPassword'], PASSWORD_ARGON2I),
            'user_image'=>"./images/hasan.jpg",
            'user_login_id'=>$_POST['userId']
        ));
    }
    require_once DR.'inc'.DS.'footer.php';
?>