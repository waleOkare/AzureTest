<?php
session_start();
require_once 'libs/phpmailer/PHPMailerAutoload.php';

$errors =[];

if(isset($_POST['name'],$_POST['email'],$_POST['message'])){
    $fields=[
        'name'=>$_POST['name'],
        'email'=>$_POST['email'],
        'message'=>$_POST['message']
    ];
    foreach($fields as $field=>$data){
        if(empty($data)){
            $errors[]='The '.$field . ' field is required.';
        }
    }
    if(empty($errors)){
        $m=new PHPMailer;
        $m->isSMTP();
        $m->SMTPAuth=true;
        $m->Host='smtp.gmail.com';
        $m->Username='waleokare@gmail.com';//replace by your email address
        $m->Password='oluwafisayo';//replace with your password
        $m->SMTPSecure='tls';
        $m->Port=587;

        $m->isHTML();
        $m->Subject ='Contact form Submitted';
        $m->Body='From:'.$fields['name'].'('.$fields['email'].')<p>'.$fields['message'].'</p>';

        $m->FromName='Contact';
        $m->AddAddress('waleokare@gmail.com','Wale Patrick');
        if ($m->send()) {
            header('Location:success.php');
            die();
        }else{
            $errors[]="Sorry ,Could not send email.Try again later.";
        }
    }
}else{
    $errors[]= 'Something went wrong';
}
$_SESSION['errors']=$errors;
$_SESSION['fields']=$fields;
header ('Location:index.php');