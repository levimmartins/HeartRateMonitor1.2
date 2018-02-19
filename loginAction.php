<?php

    include ("connection/connection.php");
    
    session_start();
    
    if(isset($_POST['login'])){
        
        if(isset($_POST['email'])  && isset($_POST['password'])){
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
        }
        
        if($email && $password){
                $sqlSelect = "SELECT idUser, email, senha, nome FROM hrmDB.user where email =  ?";
                $stmt1 = mysqli_prepare($conn, $sqlSelect);
                mysqli_stmt_bind_param($stmt1, 's', $email);
                mysqli_stmt_bind_result($stmt1, $idUser, $userEmail, $senha, $nome);
                mysqli_stmt_execute($stmt1);
               
                
                while(mysqli_stmt_fetch($stmt1)){
                    $idUserDb = $idUser;
                    $userEmailDb = $userEmail;
                    $senhaDb = $senha;
                    $nomeDb = $nome;
                }
                
                mysqli_stmt_close($stmt1);
                
                if($password == $senhaDb && $email == $userEmailDb){
                    $_SESSION['idUser'] = $idUserDb;
                    $_SESSION['nome'] = $nomeDb;
                    header("location: home.php");
                                      //  print_r($_SESSION);

                    
                  
                }else{
                    printf("Erro. Senha ou Username incorreto \n");                
                    printf(mysqli_error($conn));
                    print_r($_SESSION);
                    header("location: login.php");
                }
        }
        
    }
    
    
     if (isset($_GET['action'])){
            session_destroy();
            header("Location: home.php");
    }
    
?>