<?php 
$title = "Deleted";
require_once './includes/header.php';
require_once './db/conn.php';

If($_SERVER["REQUEST_METHOD"] == "POST"){
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $deleteKey = $_POST['deleteKey'];
    $sql = "DELETE FROM client_info WHERE client_id = $deleteKey";

    if (mysqli_query($conn, $sql)) {
    echo "Record Deleted successfully!";
    } else {
    echo "Error: " . mysqli_error($conn);
    }
}


?>

<?php 
require_once './includes/footer.php';
?>