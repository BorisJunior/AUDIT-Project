<?php
session_start();

if(isset($_POST['email'])&&!empty($_POST['pass'])){

require_once('./access.php');
$ac = new Access();
$con= $ac->connection();

 $login = $_POST['email'];
 $password = $_POST['pass'];


 $sql = "SELECT * FROM ttt_user WHERE email = '$login' AND password = '$password'";
 $data = $con->prepare($sql); 
 $data->execute();
 $result = $data->fetch();


 if($result){ 

      $_SESSION['login'] =$result['username'] ;

       header("location: App/Accueil.php");
  

    

    }else{
        
    echo "Invalid Details";
     
    }

}

else {
   echo "<div class='alert alert-danger' role='alert'><center>
      VEUILLEZ RENSEIGNER TOUS LES CHAMPS
     </center></div>";
}

?>