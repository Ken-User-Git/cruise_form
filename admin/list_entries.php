<?php

// Pull in the data layer
require_once "../includes/data_layer.php";

// Query the database to get a list of registrations
$sql = "SELECT r.first_name, r.last_name, r.email, s.state_name, d.destination_name
FROM registration r
INNER JOIN destination d ON r.destination_id = d.destination_id
INNER JOIN state s ON r.state_id = s.state_id";

$results = queryDatabase($sql);

?>
<html>
<body>

<table style="border: 1px solid black">
    <tr>
        <td>First Name</td>
        <td>Last Name</td>
        <td>E-mail</td>
        <td>State</td>
        <td>Pref. Destination</td>
    </tr>
<?php
    while($row = $results->fetch_assoc()) { // Loop over the results from the query
        echo "<tr>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['state_name'] . "</td>";
        echo "<td>" . $row['destination_name'] . "</td>";
        echo "<td>" . $row['cruiseline_name'] . "</td>";
        echo "</tr>";
    }
?>
</table>


</body>
</html>