<?php

$name = $_POST['user-name'];
$email = $_POST['email'];

$otp = mt_rand(100000,999999);

$sub = "OTP Verification";
$headers = "Content-type:text/html";
$msg = "Dear ".$name."<br><br> Your One Time Password(OTP) is:". $otp . "<br><br> Note: Do not Share this OTP !!! <br><br> Thanks.";
$status = mail($email,$sub,$msg,$headers);
if($status){
    echo "<style>body{background: url('success_celebration.gif'); background-repeat: no-repeat;} </style>";
}
else{
    echo "error";
}
?>