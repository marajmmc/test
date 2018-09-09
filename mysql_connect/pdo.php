<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arm_login_2018_19";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM login_setup_user");
    $stmt->execute();

    // set the resulting array to associative
    /*$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }*/
    echo "<pre>";
    print_r($stmt->fetchAll());
    echo "</pre>";



}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>