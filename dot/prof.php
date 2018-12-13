$id = $_SESSION['id'];
if ($_POST['country']) {
    $firstname= $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phoneno= $_POST['phoneno'];
    $email = $_POST['email'];
    $sql = mysql_query("UPDATE members SET firstname='$firstnaame',lastname='$lastname',phoneno='$phoneno',email='$email' WHERE id='$id'"); 

exit;
}

$sql = mysql_query("SELECT * FROM members WHERE id='$id' LIMIT 1");
while($row = mysql_fetch_array($sql)){
$firstname= $row["firstname"];
$lastname = $row["lastname"];
$phoneno= $row["phoneno"];
$email= $row["email"];
}
