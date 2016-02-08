<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $ql = "update Cliente set nome = '".$_SESSION['cliente']['Nome']."', email='".$_SESSION['cliente']['email']."', telefone='".$_SESSION['cliente']['telefone']."' where id=".$_SESSION['cliente']['id'];
    $exec = sqlsrv_query($conn,$ql);
    
    if($exec == false)
    {
        echo $_POST['cliente']['Nome'];
        echo $ql;
        echo 'alterar falhou';
        die(print_r(sqlsrv_errors(),TRUE));
    }