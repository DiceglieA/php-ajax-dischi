<?php
include './database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-between">
            <?php foreach ($database as $elem) { ?>

                <div class="disc-card col-2 text-center p-1">
                    <img src="<?php echo $elem['poster'] ?>" class="card-img-top" alt="...">

                    <div>
                        <h4 class="text-white">
                            <?php echo $elem['title'] ?>
                        </h4>
                        <div class="text-secondary">
                            <?php echo $elem['author'] ?>
                        </div>
                        <div  class="text-secondary">
                            <?php echo $elem['year'] ?>
                        </div>
                    </div>
                </div>


            <?php } ?>
        </div>
    </div>
</body>
</html>