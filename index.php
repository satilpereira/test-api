<?php
include_once "config/Database.php";
include_once "coordinates/read.php";
include_once "models/Coordinates.php";
?>
<!DOCTYPE html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" 
        type="text/javascript"></script>
    </head>
    <body>
        <?php
        
        ?>
        <script>
            $.ajax({
                type: 'GET',
                url: 'api/coordinates/read.php',
                success: function(result) {
                    var jsonData = result;
                    // do something with the jsonData
                    var jsonString = jsonData;
                    var jsonPretty = JSON.stringify(jsonString,null,2);  

                    window.alert(jsonPretty);
                }
            });
        </script>
    </body>
</html>