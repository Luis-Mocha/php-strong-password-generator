<?php
var_dump('strutturaTop');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>

    <?php include_once __DIR__ . '/../cdnjs/bootstrapCss.php'; ?>
</head>
<body class="bg-secondary text-light">

    <main class="container py-3">
        <h1 class="text-center">Password generator</h1>
        <?php include __DIR__ . '/form.php' ?>

        <h2 class="text-center">
            Password: <?php echo $_SESSION['password'] ?>
        </h2>
    
    </main>