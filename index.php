<?php

   $submit = $_POST['submit'];
   $newkey = $_POST['key'];
   $newmessage = $_POST['message'];
   $newstatus = $_POST['status'];

   $file = 'key.txt';
   $kfile = file_get_contents($file);
   $message = 'message.txt';
   $mfile = file_get_contents($message);
   $status = 'status.txt';
   $sfile = file_get_contents($status);
   if(isset($submit)){
       if($newkey > ""){
       unlink($file);
       $klil = fopen($file , 'a');
       fwrite($klil , $newkey);
       fclose($klil);
       }
       if($newmessage > ""){
       unlink($message);
       $mf = fopen($message , 'a');
       fwrite($mf , $newmessage);
       fclose($mf);
       }
       if($newstatus == "safe" || $newstatus == "good" || $newstatus == "ban"){
          
       unlink($status);
       $sf = fopen($status , 'a');
       fwrite($sf , $newstatus);
       fclose($sf);
       }
       
       
   }

    $deviceType = $_SERVER['HTTP_DEVICE_TYPE'];
    $deviceID = $_SERVER['HTTP_DEVICE_ID'];
    $deviceOSVersion = $_SERVER['HTTP_DEVICE_OS_VERSION'];
    $key = $_SERVER['HTTP_ACTIVATION_KEY'];
    $deviceModel = $_SERVER['HTTP_DEVICE_MODEL'];
    
    $file = fopen("device_info.txt", "a");
    fwrite($file, "Device Type: " . $deviceType . "\n");
    fwrite($file, "Device ID: " . $deviceID . "\n");
    fwrite($file, "Device OS Version: " . $deviceOSVersion . "\n");
    fwrite($file, "Device Name: " . $key . "\n");
    fwrite($file, "Device Model: " . $deviceModel . "\n");
    fclose($file);
    



    
    if($key == $kfile){
     
    http_response_code(405);
        
    if($sfile == "good"){
      http_response_code(404);
    }
    if($sfile == "ban"){
      http_response_code(402);
    }
    
    }
    
    else{
    http_response_code(403);

    }
    
    
    print_r('the hack key : ' . $kfile);
    
?>

<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kbreet ios server key</title>
    <meta name="language" content="English">
    <link rel="icon" type="image/png" href="img/alexander.png">
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.css">
     <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css"> 

    </head>
    <body>
<br>


<br>
<div class="inptanas">
 <form action="" method="post" enctype="multipart/form-data">
      
   
<input class="input" placeholder="key" name="key" type="text" >
<input class="input" placeholder="message" name="message" type="text" >
<input class="input" placeholder="status" name="status" type="text" >
<button name="submit" type="submit" class="btn" >submit</button>
</form> 
</div>

<style>
.inptanas {
  display: flex;


margin:auto;
width:95%;


}

.input{

outline:none;

color:#999;
width:90%;
height:40px;
font-size:30px;

}



.button-social {
border:none;
outline:none;
float:left;

font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
color:#367372;
padding-bottom:0;
margin-top:10px;
font-size:15px;

}


.form-switch {
float:right;
margin:5px;
margin-top:10px;
  overflow: hidden;
  display:block;
  cursor: pointer;
  -webkit-tap-highlight-color: transparent;
}
.form-switch i {



  overflow: hidden;
  position: relative;
  display: inline-block;
  margin-right: .5rem;
  width: 46px;
  height: 26px;
  background-color: #e6e6e6;
  border-radius: 23px;
  vertical-align: text-bottom;
  transition: all 0.3s linear;
}
.form-switch i::before {
  content: "";
  position: absolute;
  left: 0;
  width: 42px;
  height: 22px;
  background-color: #fff;
  border-radius: 11px;
  transform: translate3d(2px, 2px, 0) scale3d(1, 1, 1);
  transition: all 0.25s linear;
}
.form-switch i::after {
  content: "";
  position: absolute;
  left: 0;
  width: 22px;
  height: 22px;
  background-color: #fff;
  border-radius: 11px;
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.24);
  transform: translate3d(2px, 2px, 0);
  transition: all 0.2s ease-in-out;
}
.form-switch:active i::after {
  width: 28px;
  transform: translate3d(2px, 2px, 0);
}
.form-switch:active input:checked + i::after { transform: translate3d(16px, 2px, 0); }
.form-switch input { 

display: none; }
.form-switch input:checked + i { background-color: #4BD763; }
.form-switch input:checked + i::before { transform: translate3d(18px, 2px, 0) scale3d(0, 0, 0); }
.form-switch input:checked + i::after { transform: translate3d(22px, 2px, 0); }


.btn {
    display:block;
    background-color: #0071FE;
    box-shadow: #0072fe7e 0px 0px 20px 0px;
    color: #fff;
    padding: 5px 18px 6px 18px;
    text-decoration: none;
    border-radius: 3px;

}


</style>
        
    </body>
</html>