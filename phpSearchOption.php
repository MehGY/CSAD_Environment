<?php
    $search = $_POST['search'];
    
    $cookie_name = "search";
    $cookie_value = $search;
    setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "csad_project";

    $conn = new mysqli($servername, $username, $password, $db);

    if ($conn->connect_error){
            die("Connection failed: ". $conn->connect_error);
    }

    $sql = "select * from users where usersUid like '%$search%'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0){
    while($row = $result->fetch_assoc() ){
            echo "User ID:". $row["usersId"]."<br>"."Username:".$row["usersUid"]."<br>"."Email:".$row["usersEmail"]. "<br>";
    }
    } else {
            echo "0 records";
    }

    $conn->close();
?>
