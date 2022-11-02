<?php 

class Access
{// Connexion a la base de donnee pgsql
  public function connection(){
   try{
    //Au cas ou tout se passe bien
    $bdd = new pdo('pgsql:host=ec2-107-22-245-82.compute-1.amazonaws.com;port=5432;dbname=d7tgap5uv1uv0g;user=qoufdkajcnlrlu;password=1a168cf04d562cf547264f63a4f812cbd239498e5d7bc505deb05531ef8c9ba1;sslmode=require;sslcert=C:\76844704_auditproject.cert;sslkey=C:\76844704_auditproject.key;');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    echo "";
    }catch(PDOException $e){
    //S'il ya une erreur  
    echo "Une erreur est survenue".$e->getMessage();
  }
  return $bdd;
 } 
}


 $ac = new Access();
 $test=$ac->connection();

?>