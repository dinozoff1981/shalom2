<?php


$con=new mysqli("remotemysql.com","eaz1Ivi4PE","pgTGK9YvMB","eaz1Ivi4PE");


if(!$con){
    die('Connection Failed'. mysqli_connect_error($con));
}


//$con=new mysqli("localhost","root","","shalomdb");

//if(!$con){
   //die('Connection Failed'. mysqli_connect_error($con));
//}

?>