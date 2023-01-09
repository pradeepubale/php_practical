<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "03header.php";?>
</head>
<body>
    <?php
    // print_r($_POST);
    echo "<h1>Hello ". $_POST["fname"]." ".$_POST["lname"]." ! </h1><br/> ";
    ?>
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            <?php echo $_POST["user"]; ?>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo $_POST["city"]; ?></li>
            <li class="list-group-item"><?php echo $_POST["education"]; ?></li>
            <li class="list-group-item"><?php echo $_POST["zipcode"]; ?></li>
        </ul>
    </div>
    <br/><br/><br/><br/>
    <?php include "02footer_include.php"; ?>
</body>
</html>
