<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$ql = "update Produto set nome = '".$_SESSION['produto']['Nome']."', descricao='".$_SESSION['produto']['descricao']."', preco='".$_SESSION['produto']['preco']."' where id=".$_SESSION['produto']['id'];

$exec = sqlsrv_query($conn,$ql);
            
            if($exec == false)
            {
                echo $ql;
                echo 'insert falhou';
                die(print_r(sqlsrv_errors(),TRUE));
            }