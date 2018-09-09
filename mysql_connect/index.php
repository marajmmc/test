<?php
$servername = "23.95.80.223";
$username = "arm_login_2018_1";
$password = "QApu68SKExBCHrOE";
$dbname = "arm_login_2018_1";

/*$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "arm_login_2018_19";*/

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo 'connection success';
$sql = "SELECT * FROM login_csetup_customer c
inner join login_csetup_customer_info c_info on c_info.customer_id=c.id";
$result = $conn->query($sql);
/*$data=$row = $result->fetch_array();
echo "<pre>";
print_r($data);
echo "</pre>";*/


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. "<br>";
        echo "<pre>";
        print_r($row);
        echo "</pre>";

    }
} else {
    echo "0 results";
}
$conn->close();
?>