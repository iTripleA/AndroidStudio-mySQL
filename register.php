<?php
    require"init.php";
    $Name= $_POST["user"];
    $User_Name= $_POST["user_name"];
    $User_Pass=$_POST["user_pass"];
    $sql_query="insert into userinfor values('$Name','$User_Name','$User_Pass');";
    mysqli_query($con,$sql_query);
?>