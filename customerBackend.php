<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <?php
        $username = $_POST["username"];
        $password = $_POST["password"];

        echo "<h1>Welcome ".$username ."!</h1></br>";
        echo "Password: ".$password. "<br>";
     ?>
    <table>
    <tr>
        <th></th>
        <th>Quantity</th>
        <th>Price Per Item</th>
        <th>Sub Total</th>
    </tr>

    <?php

        $username = $_POST["username"];
        $password = $_POST["password"];
        $apples = $_POST["apples"];
        $bananas = $_POST["bananas"];
        $pineapples = $_POST["pineapples"];
        $shipping = $_POST["shipping"];

        echo "<tr>";
        echo "<td>Item 1</td>";
        echo "<td>" . $apples . "</td>";
        echo "<td>" . "$0.50" . "</td>";
        echo "<td>$" . money_format('%(#2n', $apples) . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Item 2</td>";
        echo "<td>" . $bananas . "</td>";
        echo "<td>" . "$1.00" . "</td>";
        echo "<td>$" . money_format('%(#2n', $bananas*0.5) . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Item 3</td>";
        echo "<td>" . $pineapples . "</td>";
        echo "<td>" . "$3.00" . "</td>";
        echo "<td>$" . money_format('%(#2n', $pineapples*3) . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Shipping</td>";
        echo "<td colspan='2'>" . $shipping . "</td>";

        if($shipping == "Free"){
            $cost = 0;
        }
        elseif($shipping == "Express"){
            $cost = 50;
        }
        elseif($shipping == "Three-Day"){
            $cost = 5;
        }
        echo "<td>$".money_format('%(#2n', $cost)."</tr>";

        echo "<tr>";
        echo "<td colspan='3'>Total Cost</td>";
        $total = $apples + $bananas*0.5 + $pineapples*3 + $cost;
        echo "<td>$" . money_format('%(#2n', $total) . "</td>";
        echo "</tr>";

    ?>

    <table>
</body>
