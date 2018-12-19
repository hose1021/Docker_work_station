<?php 
echo "PHP APACHE WORK!!!" . "<br>";
try{
    $dbh = new pdo( 'mysql:host=192.168.99.101:3306;','root','9200',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    echo "Mysql connected";
}
catch(PDOException $ex){
    echo "Unable to connect";
}
 ?>