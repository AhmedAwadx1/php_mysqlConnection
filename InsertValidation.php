<?php
require_once 'conn.php';

if(isset($_POST['submit'])){

    trim(htmlspecialchars(extract($_POST)));
    // validation
    $errors = [];
    if(empty($name)){
        $errors[] = "name is required";
    }
    if(empty($email)){
        $errors[] = "email is required";
    }
    if(empty($phone)){
        $errors[] = "phone is required";
    }
    if(empty($errors)){
        // insert
        $query = "insert into users(`name`,`email`,`phone`) values('$name','$email','$phone')";
        $result =  mysqli_query($conn,$query);

        if($result){
            $_SESSION['success'] = "data inserted successfuly";
            header("location:success.php");
        }else{
            $_SESSION['errors'] = ["error while insert data"];
         header("location:formInsert.php");

        }
    }else {
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['errors'] = $errors;
        header("location:formInsert.php");

    }
    


}else{
    header("location:create.php");
}