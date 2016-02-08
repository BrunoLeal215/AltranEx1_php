<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$ql = "delete from Pedido where id_cliente =".$_SESSION['pedido']['id_cliente']." and id_produto =".$_SESSION['pedido']['id_produto'];
            $exec = sqlsrv_query($conn,$ql);
            
            if($exec == false)
            {
                echo $ql;
                echo 'delete falhou';
                die(print_r(sqlsrv_errors(),TRUE));
            }