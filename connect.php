<?php


//$con=new mysqli("remotemysql.com","eaz1Ivi4PE","pgTGK9YvMB","eaz1Ivi4PE");


//if(!$con){
    //die('Connection Failed'. mysqli_connect_error($con));

//}


$connect=new mysqli("localhost","root","","shalomdb");

if(!$connect){
   die('Connection Failed'. mysqli_connect_error($connect));
}

?>