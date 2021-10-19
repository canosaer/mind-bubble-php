<?php
$isValid = false;
$errors = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    //do some validations
    $name = $_POST['name'];
    $email = $_POST['email'];
    $email = $_POST['email'];
    if (preg_match("/.+@\w+\.\w+/", $email)) {
        $isValid = true;
    } else{
        $isValid = false;
        $errors['email'] = "Invalid email format";
    }
    

    //if all is well, save to the DB or CRM
    if($isValid){
        $name = '';
        $email = '';
        $success = "Form submitted successfully";
    }
}

print_r($_GET);
print_r($_REQUEST);
// print_r($_ENV);
// print_r($_SERVER);

?>