<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        $ql = "insert into Pedido (id_cliente,id_produto) values ('".$_SESSION['pedido']['id_cliente']."', '".$_SESSION['pedido']['id_produto']."')";
        $exec = sqlsrv_query($conn,$ql);

        if($exec == false)
        {
            
            echo 'insert falhou - ID de cliente ou produto não cadastrado no sistema.';
            //die(print_r(sqlsrv_errors(),TRUE));
        }
