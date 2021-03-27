<?php
$UID = $_POST["UID"];
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>NFC Test</title>
</head>

<body>
    <?php
    $conn = mysqli_connect("voodoo.database.windows.net", "crybacki", "Conor7400", "TestDB");
    if ($conn->connect_error) {
        die("Connection failed:" . $conn->connect_error);
    }

    $sql = "SELECT RAN_INFO FROM STOPULL WHERE UID=$UID";
    $results = $conn->query($sql);
    ?>
    <h3>Info Returned: <?php echo $results ?> </h3>

</body>

</html>