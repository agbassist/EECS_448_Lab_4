<html>
   <head>
   </head>
<body>

    <table>
        <?php
            for($x=1;$x <= 100;$x++){
                echo "<tr>";
                for($y=1;$y <= 100;$y++){
                    echo "<th>" . $x*$y . "</th>";
                }
                echo "</tr>";
            }
        ?>
    </table>

</body>
</html>
