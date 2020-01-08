<?PHP
include("connection.php");

$email		=   $_POST['Email'];
$password	=	$_POST['Password'];

$arr = array("email" => $email,"password" => $password);

$statement= $db->prepare('SELECT * FROM Users WHERE email=:email AND password=:password');
$statement->execute($arr);

if($data=$statement->fetch(PDO::FETCH_ASSOC))
{

    $response = new stdClass();
    $response->status = true;
    $response->results = $data;
    echo json_encode($response);
}
else
{

    $error_text = new stdClass();
    $error_text->error = "Invalid user credentials";
    $array_error = array($error_text);
    $response = new stdClass();
    $response->status = false;
    $response->results = $array_error;
    echo json_encode($response);
}

?>
