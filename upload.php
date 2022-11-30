<?php
require_once "db.php";

$fileName = basename($_FILES['file']['name']); 
$fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
$fileType = strtolower($fileType);
$file = $_FILES['file']['tmp_name'];
$path = "/img/".$fileName;

$date = date('Y-m-d H:i:s');

try{

    move_uploaded_file($file,$_SERVER['DOCUMENT_ROOT']."/img/".$fileName);

    $insert = "INSERT INTO img (path,date) VALUES (?,?)";
    $stmt = $connection ->prepare($insert);
    if($stmt === false){
        throw new Exception("Chyba v databázi...");
    }

    $stmt->bind_param("ss", $path,$date);
    $stmt -> execute();

}catch(Exception $e){
    echo "Error...\n". $e->getMessage();
}

?>