<?php

// Create an array of states for the dropdown
$statesArray = array(
    "CT" => "Connecticut",
    "RI" => "Rhode Island",
    "VT" => "Vermont",
    "MA" => "Massachusetts",
    "NH" => "New Hampshire"
);

asort($statesArray);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cruise Vacation Entry Form</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
</head>
<body>
    <form class="entry_form" action="handler.php" method="post">

        <label for="first-name">First name:
        <input class="form_textbox" type="text" id="first-name" name="first-name" placeholder="Enter your first name">
            
        <br>

        <label for="last-name">Last name:
        <input class="form_textbox" type="text" id="last-name" name="last-name" placeholder="Enter your last name">

        <br>

        <label for="city">City:
        <input class="form_textbox" type="text" id="city" name="city" placeholder="Enter your city">

        <br>

        <label for="email">E-mail:
        <input class="form_textbox" type="text" id="email" name="email" placeholder="Enter your e-mail address">

        <br>

        <label for="phone">Phone:
        <input class="form_textbox" type="text" id="phone" name="phone" placeholder="Enter your phone number">

        <br>

        <label for="state">State:
        <select id="state" name="state">
            <option value="">Please select...</option>
            <?php
                foreach ($statesArray as $key => $value) {
                    echo "<option value=$key>$value</option>";
                }
            ?>
        </select>

        <br>

        <label for="preferred-destination">Preferred destination:
        <select id="preferred-destination" name="preferred-destination">
            <option value="">Please select...</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Barbados">Barbados</option>
            <option value="Cozumel">Cozumel</option>
            <option value="Hawaii">Hawaii</option>
            <option value="Jamaica">Jamaica</option>
        </select>

        <br>

        Do you want to be on the mailing list?
        <input type="radio" id="" name="mailing-list" value="yes">Yes
        <input type="radio" id="" name="mailing-list" value="no">No

        <br>

        <input type="submit" value="Submit your entry">
    </form>
</div>

</body>
</html>