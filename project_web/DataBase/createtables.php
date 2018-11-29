<?php

try {

    $pdo = New PDO("mysql:host=localhost;dbname=train_s","root","");
    $pdo->query("SET NAMES utf8"); 
    $pdo->query("SET CHARACTER SET utf8");
    $pdo->exec("
    CREATE TABLE IF NOT EXISTS train_m (
        Train_Number	int NOT NULL auto_increment primary key, 
        startid	int DEFAULT NULL,
        endid	int DEFAULT NULL,
        starttime	time NOT NULL,
        timeeach	int NOT NULL,
        type_t	varchar(50) NOT NULL
    );
    
    CREATE TABLE IF NOT EXISTS Station_m(
        Sta_num int NOT NULL auto_increment primary key,
        Name_sta varchar(50),
        type_sta int
    );
    
    
    
    INSERT INTO Station_m VALUES('','Ramses',1), ('','Baniswif',1)
    , ('','Assiut',1), ('','Giza',1), ('','Alaresh',1)
    , ('','Alqusia',1), ('','Suhag',1), ('','mghagha',1)
    , ('','fayoum',1), ('','mhla',1)
    , ('','Manflot',1), ('','Assuan',1), ('','Munifia',1)
    , ('','Delta',1);
    
    
    
    INSERT INTO train_m VALUES('',1,14,'03:00:00',20,'vip'), ('',14,1,'03:00:00',20,'vip')
    , ('',1,14,'05:22:00',20,'vip'), ('',14,1,'05:22:00',20,'vip');");
    
    }catch(PDOException $e){
    
        echo "can't create ";
    
    }
    


?>