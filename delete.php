<?php 
require_once './includes/header.php';
require_once './db/conn.php';
?>

<?php
If($_SERVER["REQUEST_METHOD"] == "POST"){
$title = "Deleted";
$sql = "SELECT * FROM client_info WHERE 1";
$result = mysqli_query($conn, $sql);
$deleteKey = $_POST['deleteKey'];
if($result){
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){
    if($row["client_id"] == $deleteKey){

    }
}
}
else{
echo "No records found";
}
}
else{
echo "Error executing query: " . mysqli_error($conn);
}
}
?>

<?php 
require_once './includes/footer.php';
?>