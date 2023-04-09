<?php

$con = mysqli_connect("localhost","root","","fitshape");

function get_connection(){
    return $GLOBALS['con'];
}
?>
