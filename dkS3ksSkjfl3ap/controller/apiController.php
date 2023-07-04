<?php
//API ENDPOINT
    // Define the function to retrieve data from the database
    function get_route_links()
    {
        include_once('../config/conn.php');

        // Retrieve data from the database
        $sql = "SELECT * FROM url";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Convert the data to JSON format
        $route_links = json_encode($data);

        // Return the JSON data
        header("Content-Type: application/json");
        echo $route_links;
    }
    // Call the function to retrieve the data
    get_route_links();

