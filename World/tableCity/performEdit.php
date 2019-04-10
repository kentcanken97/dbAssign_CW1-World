<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">    </head>
    <body>
        <div class="container">
            <br>
            <h1 class="display-4">Successful</h1>
            <hr>
            <?php
                include 'config.php';

                performEdit($conn);
                
                $conn->close();

                function performEdit($conn) {
                    $sql  = "UPDATE city SET ";
                    $sql .= "name="."'".$_POST["name"]."', ";
                    $sql .= "countrycode="."'".$_POST["countrycode"]."', ";
                    $sql .= "district="."'".$_POST["district"]."', ";
                    $sql .= "population="."'".$_POST["population"]."' ";
                    $sql .= "WHERE ID=".$_POST["ID"].";";
                    $conn->query($sql);
                    echo "Successful";
                    echo "<form action='edit.php' method='POST'>";
                    echo "<button name='ID' class='submit-button' value=".$_POST["ID"].">edit</button>";
                    echo "</form>";
                }
            ?>
        </div>
    </body>
</html>