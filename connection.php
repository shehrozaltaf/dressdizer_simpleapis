<?PHP


function getConnection()
{

    $dbhost = "localhost";/*
    $dbname = "dressdez_app";
    $dbuser = "dressdez_app";
    $dbpass = "appuser123!";*/
    $dbname = "dd";
    $dbuser = "root";
    $dbpass = "";
    $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    return $dbh;
}

$db = getConnection();
?>
