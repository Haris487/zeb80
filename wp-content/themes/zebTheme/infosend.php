<?php
ob_start();
if(!isset($_SERVER['HTTP_REFERER']) )
{
	header("location:contactus.php");
    exit();
}
include "dbcon.php";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:Wessex Cars <info@wessexcars.com>' . "\r\n";
$sub="Wessex Cars Contact Form Details";
$uid="info@wessexcars.com";
$name = $_POST['conname'];
$phone = $_POST['conphone'];
$email = $_POST['conemailid'];
$message = $_POST['enquiry'];
echo $msg='<html>
<head>
    <style>
        *{margin: 0; padding: 0;}

        .row {
            float: left;
            margin: 4px 0;
            width: 100%;
        }

        .container.MainContainer {
            margin: 0 auto;
            max-width: 350px;
        }

        label {
            float: left;
            font-weight: 600;
            margin-right: 10px;
        }
    </style>
</head>
<body>
<div class="main">
    <div class="container MainContainer">
        <div class="row" id="places">
             <h1>Personal Details</h1>
        </div>
        <div class="row">
            <p><label>Name: </label>'.$name.'</p>
        </div>
        <div class="row">
            <p><label>Email: </label>'.$email.'</p>
        </div>
        <div class="row">
            <p><label>Phone Number: </label>'.$phone.'</p>
        </div>
        <div class="row">
            <p><label>Message: </label>'.$message.'</p>
        </div>
    </div>
</div>
</body>
	';

if (mail($uid, $sub, $msg,$headers)or die("Error!"))
{
    $date=date('Y-m-d');
	$sql="INSERT into contact SET name='$name',subject='$phone',email='$email',message='$message',date='$date'";
	
	
	
    if(mysql_query($sql))
    {
		header("location:contactus.php?msg=1");
		ob_flush();
    }
}
else{
    header("location:contactus.php?msg=0");
		ob_flush();

}

?>
