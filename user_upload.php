<?php
$filename = "users.csv"
function addUserToArray($filename="", $delimeter=','){
    if(file_exists($filename) ||!is_readable($filename)){
        return false;
    }

    $head = NULL;
    $data = array();
    if(($openFile = fopen($filename, "r")) !== FALSE){
        while(($row = fgetcsv($openFile, 1000, $delimeter)) !== FALSE){
            if(!$head){
               $head = $row; 
            }
            else{
                $data[] = array_combine($head, $row);
            }
            fclose($openFile);
        }
        return $data
    }
    
}



$host = "localhost";
$port = "5432";
$dbname = "userdb";
$username = "postgres";
$password = "";
$dsn = "psql:host=$host;port=$port;dbname=$dbname;user=$username;password=$password";

try{
    $conn = new PDO($dsn);

    if($conn){
        echo "connection to $dbname successfull";
        $createTable = "CREATE TABLE IF NOT EXISTS users (
            id integer PRIMARY KEY,
            fistname varchar(50) NOT NULL,
            lastname varchar(50) NOT NULL,
            email varchar(50) NOT NULL)";
            
            $conn->exec($createTable);
            $userArray[]= addUserToArray("users.csv", ",");
            $firstname = array_column($userArray, 'firstname');
            $lastname = array_column($userArray, 'lastname');
            $email = array_column($userArray, 'email');

            $first_name = ucfirst($firstname);
            $last_name = ucfirst($lastname);
            $emails = strtolower($email);

            $addToTable = "INSERT INTO users('firstname,' 'lastname,' 'email') 
                            VALUES($first_name, $last_name, $emails)";
                            $conn->exec($addToTable);
    }
}
catch(PDOException e){
    echo $e->getMessage();
}


?>
