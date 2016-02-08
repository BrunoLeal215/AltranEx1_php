<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php include_once('Template/Head.php'); ?>
    </head>
    <body>
        <?php include_once('Template/TopMenu.php'); ?>
        <?php include_once('CRUD/Connection.php'); ?>
        
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        
        <table align='center'>
            <tr>
                <td width='30%' style='vertical-align: top'>
                    Cadastrar Cliente

                    <p><input type="text" name="ClienteNome" id="nome" size="40" class="" aria-required="true" placeholder="Nome (required)" value=""/><br/></p>
                    <p><input type="text" name="email" id="desc" size="40" class="" aria-required="true" placeholder="Email (required)" value=""/><br/></p>
                    <p><input type="text" name="telefone" id="preco" size="40" class="" aria-required="true" placeholder="Telefone (required)" value=""/><br/></p>

                    <button id="inserir" name='banco' value="clienteInserir" type="submit">
                            Inserir
                    </button>
                    
                    <br/><br/>   
                    <p><input type="text" name="idPedido" id="id" size="40" class="" aria-required="true" placeholder="ID (required)" value=""/><br/></p>

                    <button id="delete" name='banco' value="clienteDelete" type="submit">
                            Deletar
                    </button>
                    <button id="atualiza" name='banco' value="clienteAtualiza" type="submit">
                            Atualizar
                    </button> 
                    
                    <br/><br/>
                    <table align='center' width='100%'>
                        <tr align='center'><td width='30px'>ID</td><td>NOME</td><td>EMAIL</td><td>TELEFONE</td></tr>
                        <?php

                            $sql = "SELECT * FROM Cliente";
                            $stmt = sqlsrv_query( $conn, $sql );
                            if( $stmt === false) {
                                die( print_r( sqlsrv_errors(), true) );
                            }

                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                echo '<tr align="center"><td>'.$row['id'].'</td><td>'.$row['nome'].'</td><td>'.$row['email'].'</td><td>'.$row['telefone'].'</td></tr>';  
                            }
                        ?>
                    </table>
                </td>

                <td width='5%'></td>
                
                <td width='30%' style='vertical-align: top'>                    
                    Cadastrar Produto

                    <p><input type="text" name="ProdutoNome" id="nome" size="40" class="" aria-required="true" placeholder="Nome (required)" value=""/><br/></p>
                    <p><input type="text" name="desc" id="desc" size="40" class="" aria-required="true" placeholder="Descrição (required)" value=""/><br/></p>
                    <p><input type="text" name="preco" id="preco" size="40" class="" aria-required="true" placeholder="Preço (required)" value=""/><br/></p>

                    <button name="banco" id="inserir" value="produtoInserir" type="submit">
                            Inserir
                    </button>
                    
                    <br/><br/>   
                    <p><input type="text" name="idProduto" id="idProduto" size="40" class="" aria-required="true" placeholder="ID (required)" value=""/><br/></p>

                    <button name="banco" id="delete" value="produtoDelete" type="submit">
                            Deletar
                    </button>
                    <button name="banco" id="atualiza" value="produtoAtualiza" type="submit">
                            Atualizar
                    </button>
                    
                    <br/><br/>
                    <table align='center' width='100%'>
                    <tr align='center'><td width='30px'>ID</td><td>NOME</td><td>DESC</td><td>PREÇO</td></tr>
                    <?php

                        $sql = "SELECT * FROM Produto";
                        $stmt = sqlsrv_query( $conn, $sql );
                        if( $stmt === false) {
                            die( print_r( sqlsrv_errors(), true) );
                        }

                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                            echo '<tr align="center"><td>'.$row['id'].'</td><td>'.$row['nome'].'</td><td>'.$row['descricao'].'</td><td>'.$row['preco'].'</td></tr>';  
                        }
                    ?>
                    </table>
                </td>
                
                <td width='5%'></td>
                
                <td width='30%' style='vertical-align: top'>
                    Novo Pedido

                    <p><input type="text" name="IDCliente" id="IDCliente" size="40" class="" aria-required="true" placeholder="ID Cliente(required)" value=""/><br/></p>
                    <p><input type="text" name="IDProduto" id="IDProduto" size="40" class="" aria-required="true" placeholder="ID Produto(required)" value=""/><br/></p>

                    <button name="banco" id="inserir" value="pedidoInserir" type="submit">
                            Inserir
                    </button>
                    <button name="banco" id="inserir" value="pedidoDelete" type="submit">
                            Deletar
                    </button>
                    
                    <br/><br/>
                    <table align='center' width='100%'>
                    <tr align='center'><td width='30px'>ID</td><td>ID Cliente</td><td>ID Produto</td></tr>
                    <?php
                        $sql = "SELECT * FROM Pedido";
                        $stmt = sqlsrv_query( $conn, $sql );
                        if( $stmt === false) {
                            die( print_r( sqlsrv_errors(), true) );
                        }

                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                            echo '<tr align="center"><td>'.$row['id_cliente'].'</td><td>'.$row['id_produto'].'</td></tr>';  
                        }
                    ?>
                    </table>
                </td>
            </tr>
            
            <tr>
                <td width='30%'>
                    <?php
                    $ql = "select * from Cliente";
                    $exec = sqlsrv_query($conn,$ql);
                    ?>
                </td>
                <td width='5%'></td>
                <td width='30%'>
                    <?php
                    $ql = "select * from Produto";
                    $exec = sqlsrv_query($conn,$ql);
                    ?>
                </td>
                <td width='5%'></td>
                <td width='30%'>
                    <?php
                    $ql = "select * from Pedido";
                    $exec = sqlsrv_query($conn,$ql);
                    ?>
                </td>
            </tr>
        </table>
        
        </form>
        <?php
            $_SESSION["cliente"] = "";
            $_SESSION["produto"] = "";
            $_SESSION["pedido"] = "";
            
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                //inserir na tabela
                if($_POST['banco']=="clienteInserir")
                {
                    $clienteinfo = array();
                    $clienteinfo['Nome'] = $_POST['ClienteNome'];
                    $clienteinfo['email'] = $_POST['email'];
                    $clienteinfo['telefone'] = $_POST['telefone'];
                    
                    $_SESSION["cliente"] = $clienteinfo;
                    
                    include_once('CRUD/Cliente/Insert.php');
                }
                
                if($_POST['banco']=="produtoInserir")
                {
                    $produtoinfo = array();
                    $produtoinfo['Nome'] = $_POST['ProdutoNome'];
                    $produtoinfo['descricao'] = $_POST['desc'];
                    $produtoinfo['preco'] = $_POST['preco'];
                    
                    $_SESSION["produto"] = $produtoinfo;   
                    
                    include_once('CRUD/Produto/Insert.php');
                }
                
                if($_POST['banco']=="pedidoInserir")
                {
                    $pedidoinfo = array();
                    $pedidoinfo['id_cliente'] = $_POST['IDCliente'];
                    $pedidoinfo['id_produto'] = $_POST['IDProduto'];
                   
                    $_SESSION["pedido"] = $pedidoinfo;   
                    
                    include_once('CRUD/Pedido/Insert.php');
                }
                
                //deletar na tabela
                if($_POST['banco']=="clienteDelete")
                {
                    $clienteinfo = array();
                    $clienteinfo['id'] = $_POST['idPedido'];
                    $clienteinfo['Nome'] = $_POST['ClienteNome'];
                    $clienteinfo['email'] = $_POST['email'];
                    $clienteinfo['telefone'] = $_POST['telefone'];
                    
                    $_SESSION["cliente"] = $clienteinfo;
                    
                    include_once('CRUD/Cliente/Delete.php');
                }
                
                if($_POST['banco']=="produtoDelete")
                {
                    $produtoinfo = array();
                    $produtoinfo['id'] = $_POST['idProduto'];
                    $produtoinfo['Nome'] = $_POST['ProdutoNome'];
                    $produtoinfo['descricao'] = $_POST['desc'];
                    $produtoinfo['preco'] = $_POST['preco'];
                    
                    $_SESSION["produto"] = $produtoinfo;   
                    include_once('CRUD/Produto/Delete.php');
                }
                
                if($_POST['banco']=="pedidoDelete")
                {
                    $pedidoinfo = array();
                    $pedidoinfo['id_cliente'] = $_POST['IDCliente'];
                    $pedidoinfo['id_produto'] = $_POST['IDProduto'];
                   
                    $_SESSION["pedido"] = $pedidoinfo;   
                    include_once('CRUD/Pedido/Delete.php');
                    
                }
                
                //Atualizar
                if($_POST['banco']=="clienteAtualiza")
                {
                    $clienteinfo = array();
                    
                    $clienteinfo['id'] = $_POST['idPedido'];
                    $clienteinfo['Nome'] = $_POST['ClienteNome'];
                    $clienteinfo['email'] = $_POST['email'];
                    $clienteinfo['telefone'] = $_POST['telefone'];
                    
                    $_SESSION["cliente"] = $clienteinfo;
                    
                    echo $_SESSION["cliente"]["Nome"];
                    
                    include_once('CRUD/Cliente/Update.php');
                }
                
                if($_POST['banco']=="produtoAtualiza")
                {
                    $produtoinfo = array();
                    $produtoinfo['id'] = $_POST['idProduto'];
                    $produtoinfo['Nome'] = $_POST['ProdutoNome'];
                    $produtoinfo['descricao'] = $_POST['desc'];
                    $produtoinfo['preco'] = $_POST['preco'];
                    
                    $_SESSION["produto"] = $produtoinfo;   
                    include_once('CRUD/Produto/Update.php');
                }
            }
        ?>
        
    </body>
</html>
