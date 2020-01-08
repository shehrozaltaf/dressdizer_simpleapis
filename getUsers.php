<?php
include 'dbconn.php';
$email = (isset($_POST['email']) && $_POST['email '] != '' ? $_POST['email '] : '');
$sql = "SELECT * FROM users where email='" . $email . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $result = $result->fetch_assoc();
} else {
    $result = "No record Found";

}
echo json_encode($result);
$conn->close();
?>