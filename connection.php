<?php
$connection = mysqli_connect("localhost", "root", "", "adminuser");

//checking connection
if (mysqli_connect_errno())
{
    echo "connection failed".mysqli_connect_error();
}
