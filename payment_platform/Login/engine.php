<?php



function login(){


include 'database.php';
extract($_POST);




    if(!empty($email)){
        if(!empty($password)){
     $sanitize_email =  mysqli_real_escape_string($connect, $email);
    $sanitze_password =  mysqli_real_escape_string($connect, $password);

    $users = mysqli_query($connect, "SELECT * FROM users WHERE email = '$sanitize_email' ");
    if( mysqli_num_rows($users)   > 0 ) {
        while($row = mysqli_fetch_array($users)){
            // echo $sanitze_password;

            if($sanitze_password == $row['password']){
                echo "login successful";
                $_SESSION['user_in'] = true;
            } else {
                echo "wrong password";
            }

        }
    } else {
        echo "email not registered..!";
    }
        } else {
            exit("please enter password");
        }
    } else { echo "please enter email"; exit();
    } 


    //make database query

 
    

}


function register(){
include 'database.php';

    extract($_POST);

    // echo $email;

    if(!empty($email)){
        if(!empty($password)){
            $sanitze_email =  mysqli_real_escape_string($connect, $email);
            $sanitze_password =  mysqli_real_escape_string($connect, $password);
    
            $insert = mysqli_query($connect,"INSERT INTO users (email, password) VALUES ('$sanitze_email', '$sanitze_password') ");
            if(!$insert){
                echo "registration failed..!" . mysqli_error($connect);
            }else{
                echo "registration successful";
                $_SESSION['user_in'] = true;

            }
    
        } else {
            exit("please enter password");
        }
    } else { echo " please enter email"; exit();



    
        
    } 
}
