<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $ql = "delete from Cliente where id =".$_SESSION['cliente']['id'];
    $exec = sqlsrv_query($conn,$ql);

    if($exec == false)
    {
        echo 'insert falhou';
        die(print_r(sqlsrv_errors(),TRUE));
    }