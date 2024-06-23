<?php
    function connectToDatabase(){
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $name_db = 'starbook_databse';
        $conn = new mysqli($servername, $username, $password, $name_db);
        if($conn->connect_error){
            echo "Kết nối thành công";
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
    
    function executeQuery($sql){
        $conn = connectToDatabase();
        $result = $conn->query($sql);
        $conn->close();
        return $result; //Trả về true nếu thành công, false nếu thất bại
    }

    function queryDatabase($sql){
        $conn = connectToDatabase();
        $result = $conn->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        $conn->close();
        return $data;
    }
?>