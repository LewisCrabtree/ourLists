<?php
function OpenCon(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "dbOurLists";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> connect_error);
    if(!$conn) {
        CloseCon($conn);
        return;
    }
    return $conn;
}

function CloseCon($conn){
    $conn->close();
} 
?>