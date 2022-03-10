<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function ceciESTUNMOdule() {
            if(isset($_GET['VariablePasséeDansGet'])) {
                $VariablePasséeDansGet = $_GET['VariablePasséeDansGet'];
            }
            while(true) {
                echo "slt";
            }
        }
    ?>
</body>
</html>