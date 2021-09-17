<?php
    session_start();
    
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) >0){
                echo "$email - Cet email existe déjà!";
            }else{
                $ran_id = rand(time(), 100000000);
                $status = "Active now";
                $encrypt_pass = md5($password);
                $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, status)
                VALUES ({$ran_id}, '{$fname}','{$lname}', '{$email}', '{$encrypt_pass}', '{$status}')");
                if($insert_query){
                    $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                    if(mysqli_num_rows($select_sql2) > 0){
                        $result = mysqli_fetch_assoc($select_sql2);
                        $_SESSION['unique_id'] = $result['unique_id'];
                        $_SESSION['admin'] = $result['admin'];
                        echo "success";
                    }else{
                        echo "Cet email n'existe pas!";
                    }
                }else{
                    echo "Un problème est survenu, reesayez!";
                }
            }
        }else{
            echo "$email n'est pas un mail valide!";
        }
    }else{
        echo "Tous les champs sont requis!";
    }
?>