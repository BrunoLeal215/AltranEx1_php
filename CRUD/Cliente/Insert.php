<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $ql = "insert into Cliente (nome,email,telefone) values ('".$_SESSION['cliente']['Nome']."', '".$_SESSION['cliente']['email']."', '".$_SESSION['cliente']['telefone']."')";
    $exec = sqlsrv_query($conn,$ql);

    if($exec == false)
    {
        echo 'insert falhou';
        echo $ql;
        die(print_r(sqlsrv_errors(),TRUE));
    }