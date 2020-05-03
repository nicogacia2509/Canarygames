<?php
    //connect with the server
    $conectar=@mysql_connect('localhost', 'root', '');
    //verify if the connection is correct
    if(!$conectar){
        echo "no se oudo conectar";
    }else{
        
        $base=mysql_select_db('datos');
        if(!$base){
            echo"no se encontro la base de datos";
        }
    }
    //return variables
    
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    //sql action
    $sql="INSERT INTO datos VALUES('$email'
                                   '$username'
                                   '$password')";
    
    //execute the action
    $ejecutar=mysql_query($sql);
    //verify the execution
    if(!$ejecutar){
            echo"there was a mistake";
    }else{
        echo"data saved correctly<br><a href='Login.html'>return<a>";
    }
    
    
 ?>