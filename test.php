
<?php
include "__libs/Database.class.php";

$conn =  new Database;
$conn->__get_connection();
if($conn){
    print("database connection is  success");
}else{
    print("connction is fail");
}
