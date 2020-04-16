<?php
$dsn = 'mysql:host=localhost;port=3306;dbname=passcollector';
$username = "root";
$password = "@root123";
try {
    $dbconn = new PDO($dsn,$username,$password);
    
    echo "Connected successfully";

    $sql = "SELECT * FROM userinfo";

    $q = $dbconn->prepare($sql);
    $q->execute(['%son']);
    $q->setFetchMode(PDO::FETCH_ASSOC);

    while ($r = $q->fetch()) {
        echo sprintf('%s <br/>', $r['lastName']);
    }



    }

catch(PDOException $e)
   {
   echo "Connection failed: " . $e->getMessage();
   }
?>