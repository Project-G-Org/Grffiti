<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Grffiti Project</title>

        <!-- Vendor -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
        <!-- Custom CSS -->
        <?php if(!is_null(@$pageData['css'])): ?>
            <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>Styles/<?php echo $pageData['css'] ?>">
        <?php endif ?>
            
        <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH?>Styles/header.css">
        <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH?>Styles/footer.css">
        <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH?>Styles/response.css">
    </head>

    <body>
        <!-- Bootstrap Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

        <!-- HTMX Scripts -->
        <script src="https://unpkg.com/htmx.org@1.9.3" integrity="sha384-lVb3Rd/Ca0AxaoZg5sACe8FJKF0tnUgR2Kd7ehUOG5GCcROv5uBIZsOqovBAcWua" crossorigin="anonymous"></script>

        <header id="nav-header">
            <nav id="nav-header-container">
                <a id="nav-header-back" href="<?php echo INCLUDE_PATH?>">
                    <img id="nav-header-img" src="<?php echo INCLUDE_PATH?>Assets/LOGO.png">
                </a>
                <ul id="nav-header-container-links">
                    <li class="nav-header-container-links-list"><a href="#">EXPLORAR</a></li>
                    <li class="nav-header-container-links-list"><a href="#">COMPRAR</a></li>
                    <li class="nav-header-container-links-list"><a href="#">ANUNCIAR</a></li>
                </ul>
                <div id="nav-header-search">
                    <form action="/search?">
                        <input id="nav-header-search-input" type="search" name="q" placeholder="Pesquisar">
                        <button id="nav-header-search-input-button" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </nav>
        </header>