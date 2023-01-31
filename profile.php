<?php
    include './database.php';
    $sql = 'SELECT * FROM user';
    $result = mysqli_query($conn, $sql);
    $final = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link rel="stylesheet" href="./BOOSTRAP V5.30/bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
</head>
<body>
    <header>
        <div class="pic">
            <i class="fas fa-2x fa-camera-circle"></i>
        </div>
    </header>
    <div>
        <div class="d-flex">
            <h2>Name</h2>
            <?php foreach($final as $profile):?>
                <span class="span"><?= $profile['username'];?></span>
                <button class="btn btn-outline-primary">Add Pic</button>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>