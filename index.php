<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "u633421644_tsuryaswaroop", "w6gt8.ht8wk", "u633421644_MEINDIA_saif");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution with order by clause
$sql = "SELECT * FROM Saif_Seas ORDER BY id DESC";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Date and Time</th>";
                echo "<th>Latitude</th>";
                echo "<th>Longitude</th>";
                echo "<th>Main</th>";
                echo "<th>Description</th>";
                echo "<th>Base</th>";
                echo "<th>Temperature</th>";
                echo "<th>Pressure</th>";
                echo "<th>Humidity</th>";
                echo "<th>Min Temperature</th>";
                echo "<th>Max Temperature</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['event'] . "</td>";
                echo "<td>" . $row['latitude'] . "</td>";
                echo "<td>" . $row['longitude'] . "</td>";
                echo "<td>" . $row['main'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td>" . $row['base'] . "</td>";
                echo "<td>" . $row['temperature'] . "</td>";
                echo "<td>" . $row['pressure'] . "</td>";
                echo "<td>" . $row['humidity'] . "</td>";
                echo "<td>" . $row['minimum'] . "</td>";
                echo "<td>" . $row['maximum'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
