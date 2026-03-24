<?php
$title = "Received";
require_once './includes/header.php';
require_once './db/conn.php';

If($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $postal_code = $_POST['postal_code'];

    $email = mysqli_real_escape_string($conn, $email);
    $address = mysqli_real_escape_string($conn, $address);
    $city = mysqli_real_escape_string($conn, $city);
    $province = mysqli_real_escape_string($conn, $province);
    $postal_code = mysqli_real_escape_string($conn, $postal_code);

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "INSERT INTO client_info (email, address, city, province, postalcode) VALUES ('$email', '$address', '$city', '$province', '$postal_code')";

    
    if (mysqli_query($conn, $sql)) {
    echo "Record added successfully!";
    } else {
    echo "Error: " . mysqli_error($conn);
    }
}



?>

<?php echo $_POST['email']; ?>
<?php echo $_POST['address']; ?>
<?php echo $_POST['city']; ?>
<?php echo $_POST['province']; ?>
<?php echo $_POST['postal_code']; ?>

<?php
require_once './includes/footer.php';
?>