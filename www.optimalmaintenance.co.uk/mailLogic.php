<?php
session_start();

require_once '../www.optimalmaintenance.co.uk/mailerphp/phpmailer/PHPMailerAutoload.php';

$errors = [];

//print_r($_POST);
if(isset($_POST['inputname'],$_POST['email'],$_POST['phone'],$_POST['message'])){

    $fields = [
        'inputname'=> $_POST['inputname'],
        'email'=>$_POST['email'],
        'phone'=>$_POST['phone'],
        'message'=>$_POST['message']
    ];

    foreach($fields as $field =>$data){
        if(empty($data)){
            $errors[] = 'The ' . $field . ' field is required';
        }
    }
    if(empty($errors)){
        $m = new PHPMailer;

        $m-> isSMTP();
        $m->SMTPAuth = true;

        // $m->SMTPDebug = 1;

        $m->Host = 'smtp.gmail.com';
        $m->Username = 'waleokare@gmail.com';
        $m->Password = 'oluwafisayo';
        $m->SMTPSecure = 'ssl';
        $m->Port = 465;

        $m ->isHTML();

        $m ->Subject = 'Contact form submitted';
        $m-> Body = 'From: '. $fields['inputname']. ' '. $fields['email']. ' ('. $fields['phone']. ') <p>'. $fields['message']. '</p>';

        $m->FromName = 'Contact';
        //    $m ->AddreplyTo($fields['Name'], $fields['Email']);

        $m->AddAddress('waleokare@gmail.com', 'Wale Patrick');

        if($m->send()){
            header('Location: get-in-touch.php');
            die();
        }else{
            $errors[] = 'Sorry, could not send email. Try again later.';
        }
    }
}else{
    $errors[] = 'Something went wrong.';
}

$_SESSION['errors']= $errors;
$_SESSION['fields']= $fields;

header('Location: get-in-touch.php');
