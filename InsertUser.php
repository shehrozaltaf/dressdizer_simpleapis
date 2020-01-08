<?php include 'dbconn.php';
/*$postdata = file_get_contents("php://input"); */
//$postdata = '{"picture":"xyz","name":"shehroz","mobile_number":"034255555555","email":"shehroz.altaf92@gmail.com","password":"1234","gender":"male","date_of_birth":"13-08-1992"}';
//$request = json_decode($postdata);
/*$picture = (isset($request->picture) && $request->picture != '' ? $request->picture : '');
$name = (isset($request->name) && $request->name != '' ? $request->name : '');
$mobile_number = (isset($request->mobile_number) && $request->mobile_number != '' ? $request->mobile_number : '');
$email = (isset($request->email) && $request->email != '' ? $request->email : '');
$password = (isset($request->password) && $request->password != '' ? $request->password : '');
$gender = (isset($request->gender) && $request->gender != '' ? $request->gender : '');
$date_of_birth = (isset($request->date_of_birth) && $request->date_of_birth != '' ? $request->date_of_birth : '');*/

$flag = 0;
$picture = (isset($_POST['picture']) && $_POST['picture'] != '' ? $_POST['picture'] : '');
$name = (isset($_POST['name']) && $_POST['name'] != '' ? $_POST['name'] : $flag = 1);
$mobile_number = (isset($_POST['mobile_number']) && $_POST['mobile_number'] != '' ? $_POST['mobile_number'] : $flag = 1);
$email = (isset($_POST['email']) && $_POST['email'] != '' ? $_POST['email'] : $flag = 1);
$password = (isset($_POST['password']) && $_POST['password'] != '' ? $_POST['password'] : $flag = 1);
$gender = (isset($_POST['gender']) && $_POST['gender'] != '' ? $_POST['gender'] : $flag = 1);
$date_of_birth = (isset($_POST['date_of_birth']) && $_POST['date_of_birth'] != '' ? $_POST['date_of_birth'] : $flag = 1);

if ($flag == 1) {
    $sql = "INSERT INTO `Users`(`picture`, `name`, `mobile_number`, `email`, `password`, `gender`, `date_of_birth`)
 VALUES ('" . $picture . "','" . $name . "','" . $mobile_number . "','" . $email . "','" . $password . "','" . $gender . "','" . $date_of_birth . "')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo 'Something went wrong';
}
$conn->close(); ?>