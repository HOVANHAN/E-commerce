<?php
    function validateLenUp($up)
    {
        return strlen($up)>=6 && strlen($up)<30;
    }
    function validateEmail($email)
    {
        filter_var($email,FILTER_VALIDATE_EMAIL)!=false?true:false;
    }
    function existUsername($link,$username)
    {
        $result =  chayTruyVanTraVeDL($link,"select count(*) from tbl_user where username ='".$username."'");
        $row =mysqli_fetch_row($result);
        mysqli_fetch_row($result);
        return $row[0]>0;
    }
