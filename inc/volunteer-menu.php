<?php
$passed = true;
$message = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    //do some validations
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $math = $_POST['math'];

    $nameResponse = false;
    if(!empty($name)) {
        $nameResponse = true;
    }

    $emailResponse = false;
    if(!empty($email)) {
        $emailResponse = true;
    }

    $phoneResponse = false;
    if(!empty($phone)) {
        $phoneResponse = true;
    }

    $mathResponse = false;
    if(!empty($math)) {
        $mathResponse = true;
    }
    

    if(!$nameResponse || !$emailResponse || !$phoneResponse || !$mathResponse){
        $message = 'Complete all fields to continue';
        $passed = false;
    }

    if($emailResponse){
        if (!preg_match("/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w{2,}([-.]\w{2,})*$/", $email)) {
            $message = 'Please enter a valid email address';
            $passed = false;
        }
    }

    if($phoneResponse){
        if (!preg_match("/^1?\(?\d{3}[\s.\-\)]?\s?\d{3}[\s.\-]?\d{4}$/", $phone)) {
            $message = 'Please enter a valid phone number';
            $passed = false;
        }
    }

    error_log($math);
    error_log($_SESSION["answer"]);
    if($mathResponse){
        if ($math != $_SESSION["answer"]) {
            $message = 'Please check your math';
            $passed = false;
        }
    }

    
    //if all is well, save to the DB or CRM
    if($passed){
        $name = '';
        $email = '';
        $phone = '';
        $math = '';
        $message = "Form submitted successfully";
    }
}

// print_r($_GET);
// print_r($_REQUEST);
// print_r($_ENV);
// print_r($_SERVER);

?>