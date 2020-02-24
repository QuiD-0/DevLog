<?php
function template()
{
    include('connect.php');
    $sql = "query";
    $result = mysqli_query($conn, $sql);

}