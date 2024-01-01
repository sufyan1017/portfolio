<?php

$con=new mysqli('localhost','root','admin','form');
if($con){
    echo "connection success";

}else{
    die(mysql_error($con));
}



?>