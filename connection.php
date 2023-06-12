<?php
$con  = mysqli_connect('localhost','root','','student');
if(mysqli_connect_errno())
{
    echo 'Database Connection Error';
}