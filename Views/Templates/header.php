<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Grffiti Project</title>

        <!-- Vendor -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        
        <!-- Custom CSS -->
        <?php if(!is_null(@$pageData['css'])): ?>
            <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>Styles/<?php echo $pageData['css'] ?>">
        <?php endif ?>

        <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>Styles/footer.css">
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>Styles/response.css">
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>Styles/header.css">
    </head>

    <body>
        <!-- Bootstrap Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

        <!-- HTMX Scripts -->
        <script src="https://unpkg.com/htmx.org@1.9.3" integrity="sha384-lVb3Rd/Ca0AxaoZg5sACe8FJKF0tnUgR2Kd7ehUOG5GCcROv5uBIZsOqovBAcWua" crossorigin="anonymous"></script>

        <header>
            <nav id="nav-header-container">
                <!-- <img id="nav-header-img" src="<?php echo INCLUDE_PATH?>Assets/LOGO.png"> -->
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id, eos. Id minus ipsum dolorem nam recusandae laudantium voluptas. Id, recusandae earum. Quisquam culpa numquam omnis explicabo quam repellendus quod perspiciatis.</p>
            </nav>
        </header>