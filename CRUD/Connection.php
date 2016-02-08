<?php
        $server_name ='BRUNO\SQLEXPRESS';
        $connectioninfo = array('Database'=>'Altran');
        
        $conn = sqlsrv_connect($server_name,$connectioninfo);
        
        if($conn)
            {
            echo '';
            }else
            {
                echo 'falhou!';
                die(print_r(sqlsrv_errors(),TRUE));
                
            }
            
        
        